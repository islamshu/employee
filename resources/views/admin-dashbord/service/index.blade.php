@extends('layouts.backend')
@section('content') <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">الخدمات</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a> </li>
                        <li class="breadcrumb-item active">الخدمات </li>
                    </ol>
                </div>
            </div>
        </div>
    </div> <!-- Zero configuration table -->
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">الخدمات</h4> <a class="heading-elements-toggle"><i
                                class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div> <br>



                        <div> <a href="{{ route('services.create') }}" style="float: left" class="btn btn-primary">أضف
                                جديد</a> </div> <br>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                             @include('inc.alerts.error')
                              @include('inc.alerts.success')
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>اسم الخدمة</th>
                                    
                                        <th>الإجرائات</th>
                                    </tr>
                                </thead>
                                <tbody id="edit_table">
                                    @foreach ($services as $item)
                                        <tr>
                                            <td>
                                                {{ $item->title }}
                                            </td>
                                            <td>
                                                <a href="{{ route('services.edit', $item->id) }}"
                                                    class="btn btn-icon btn-primary mr-1"> <i
                                                        class="la la-edit"></i></a>
                                                <form style="display: inline"
                                                    action="{{ route('services.destroy', $item->id) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-danger mr-1 delete-confirm"><i
                                                            class="la la-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        function make(id) {

            $('#staticBackdrop').modal("show");
            $('.c-preloader').show();

            $.ajax({
                type: 'post',
                url: "{{ route('showpostModal') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id
                },
                success: function(data) {
                    $('#addToCart-modal-body').html(data);
                }
            });

        }
        function change(id) {
            $('#' + id).attr("readonly", false);
        }
        function setInput(id, inputid, elemt) {
            let val = $('#' + inputid).val();
            $.ajax({
                type: 'post',
                url: "{{ route('update_info') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id': id,
                    'value': val,
                    'elemnt_name': elemt
                },

                success: function(data) {

                    if (data == 1) {
                        alert('updated');
                        $('#' + inputid).attr("readonly", true);

                        refresh();

                    }


                }


            });
        }

        function refresh() {
            $.get(`{{ route('user.refresh') }}`).done(function(new_data) {
                    $("#edit_table").replaceWith(new_data);
                });
            }
    </script>
@endsection
