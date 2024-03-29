@extends('layouts.backend')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">القسم الثالث </h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>

                        <li class="breadcrumb-item active">القسم الثالث
                        </li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">القسم الثالث </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            @include('inc.alerts.error')
                            @include('inc.alerts.success')

                            <form class="form" method="post" action="{{ route('third_section_post', @$section->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>العنوان بالخط الكبير بالعربية * </label>
                                            <textarea name="body_ar" required class="ckeditor" cols="30" rows="10">{!! @$section->getTranslation('body', 'ar') !!}</textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label>العنوان بالخط الكبير بالانجليزية * </label>
                                            <textarea name="body_en" required class="ckeditor" cols="30" rows="10">{!! @$section->getTranslation('body', 'en') !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="form-section"><i class="la la-add"></i>القوائم الجانبية</h4>

                                <div id="car_parent">


                                    @if ($section->relation != null)
                                        <div id="partent">
                                            @foreach ($section->relation as $key => $item)
                                                <span>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>العنوان بالعربية:</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-lg name_ar_offer"
                                                                        id="name_ar_offer"
                                                                        value="{{ @$item->getTranslation('title', 'ar') }}"
                                                                        name="addmore[{{ $key }}][title_ar]"
                                                                        required />

                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>العنوان بالانجليزية:</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        id="name_en"
                                                                        value="{{ @$item->getTranslation('title', 'en') }}"
                                                                        name="addmore[{{ $key }}][title_en]"
                                                                        required />

                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="form-group">
                                                                    <label>الأيقونة</label>
                                                                    <input type="text"
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        id="name_en" value="{{ @$item->icon }}"
                                                                        name="addmore[{{ $key }}][icon]"
                                                                        required />

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="button" class="remove_button_old btn btn-danger "
                                                        title="Remove field">Remove</button>

                                                </span>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label>العنوان بالعربية:</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-lg name_ar_offer"
                                                            id="name_ar_offer" name="addmore[0][title_ar]" required />

                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Input-->
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label>العنوان بالانجليزية:</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-lg"
                                                            id="name_en" name="addmore[0][title_en]" required />

                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label>الأيقونة</label>
                                                        <input type="text"
                                                            class="form-control form-control-solid form-control-lg"
                                                            id="name_en" name="addmore[0][icon]" required />

                                                    </div>
                                                </div>
                                            </div>





                                        </div>
                                    @endif

                                    <div id="extra">





                                    </div>
                                    <br>
                                    <button type="button" name="add"
                                        class="btn btn-success add_row for-more">{{ __('Add more') }}</button>


                                    <div class="form-actions left">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> {{ __('حفظ') }}
                                        </button>
                                    </div>
                                </div>





                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var i = {{ $section->relation->count() }} - 1;
            $('.add_row').on('click', function() {
                addRow();
            });

            function addRow() {
                ++i;
                const sum = i + 1;



                let form = `
                    <span class="test">
                    <div class="card-body" >
                        <div class="row">
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label>العنوان بالعربية:</label>
                                <input type="text"
                                    class="form-control form-control-solid form-control-lg name_ar_offer"
                                    id="name_ar_offer" name="addmore[` + i + `][title_ar]" required
                                    />
                                
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="form-group">
                                <label>العنوان بالانجليزية:</label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    id="name_en" name="addmore[` + i + `][title_en]" required
                                    />
                                
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="form-group">
                                <label>الأيقونة</label>
                                <input type="text" class="form-control form-control-solid form-control-lg"
                                    id="name_en" name="addmore[` + i + `][icon]" required
                                    />
                                
                            </div>
                        </div>
                    </div>



                    </div>
                    <button type="button" class="remove_button btn btn-danger " title="Remove field">Remove</button>
                    </span>
                    `;
                $('#extra').append(form);
                var wrapper = $('#extra');
                $(wrapper).on('click', '.remove_button', function(e) {
                    e.preventDefault();
                    $(this).parent('span').remove();

                });

                // $(wrapper1).on('click', '.remove_button_old', function (e) {
                //     alert('d');
                //         e.preventDefault();
                // $(this).parent('span').remove();

                // });
            }
            var wrapper1 = $('#partent');
            $(wrapper1).on('click', '.remove_button_old', function(e) {
                e.preventDefault();
                $(this).parent('span').remove();
            });
        });
    </script>

    <script></script>
@endsection
