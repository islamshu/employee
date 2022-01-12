@extends('layouts.backend')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">بيانات التواصل مع العملاء</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">بيانات التواصل مع العملاء
                        </li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <!-- Zero configuration table -->
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">خطوات العمل</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                        <br>
                        
                        <br>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            @include('inc.alerts.error')
                            @include('inc.alerts.success')

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>اسم العميل</th>
                                        <th>اسم الشركة</th>
                                      

                                        <th>الإجرائات</th>
                                    </tr>
                                </thead>
                                <tbody class="sort_menu">
                                    @foreach ($clients as $item)
                                   
        
                                        <tr>
                                            <td> {{ $item->name }}</td>    
                                            <td> {{ $item->company_name }}</td>                                           {{-- <td >{{ $item->company_name }}</td>
                                            <td >{{ $item->email }}</td>
                                            <td >{{ $item->phone }}</td>
                                            <td >{{ $item->communication }}</td>
                                            <td >{{ $item->status == 'respond' ?'تم الرد' : 'لم يتم الرد' }}</td>
                                            <td >@if($item->status2 == 'interested')
                                            {{ 'مهتم' }}
                                            @elseif($item->status2 == 'not_Interested')
                                            {{ 'غير مهتم' }}
                                            @elseif($item->status2 == 'negotiation')

                                            {{ 'تفاوض' }}
                                            @else
                                            {{ '__' }}
                                            @endif
                                            </td> --}}

                                            <td >
                                               <a href="{{ route('add_comuncate.new',$item->id) }}"><button type="submit"
                                                class="btn btn-icon btn-info mr-1 "><i
                                                class="la la-plus"></i>اضف وسائل</button></a>
                                                {{-- <form style="display: inline"
                                                    action="{{ route('communication.destroy', $item->id) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-danger mr-1 delete-confirm"><i
                                                        class="la la-trash"></i></button>
                                                </form> --}}
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
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 130%; !important">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1"> اضف جديد</h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="addToCart-modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary"
                    data-dismiss="modal">إغلاق</button>
            </div>
        </div>
    </div>
</div>
  
@endsection
@section('script')
    <script>
        function change(status){
         var lee =    $('#' + status).val();
         alert(lee);

        }
       
        function add_new(id) {

            $('#staticBackdrop').modal("show");
            $('.c-preloader').show();

            $.ajax({
                type: 'post',
                url: "{{ route('add_new_communcation') }}",
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
    <script type="text/javascript">
        $(document).ready(function() {
          $("#status").change(function(){ 
            var state =  $(this).val();
           
            if(state == 'respond'){
                $("#unresponse").css("display", "block");
                $("#status2").attr("required", true);
    
            }else{
                $("#unresponse").css("display", "none");
                $("#status2").attr("required", false);
    
            }
            
          });
        
        });
    </script>
@endsection


