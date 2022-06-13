@extends('layouts.backend')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">القسم الاول</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('first_section') }}">القسم الاول</a>
                        </li>
                        <li class="breadcrumb-item active">القسم الاول
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
                        <h4 class="card-title" id="basic-layout-colored-form-control">تعديل سلايدر</h4>
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

                            <form class="form" method="post" action="{{ route('first_section_post', @$firsts->id) }}"
                                enctype="multipart/form-data">
                                @csrf 
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>القسم الاول</h4>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Image* </label>
                                                <input type="file" name="image" class="form-control image"
                                                    data-preview="image" id="">
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset('uploads/' . @$firsts->image) }}" style="width: 100px"
                                                    class="img-thumbnail image-preview" alt="">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                          <div class="col-md-6">
                                              <label>النص الأول بالعربية * </label>
                                              <textarea name="main_title_ar" required class="ckeditor" cols="30" rows="10">{!! @$firsts->getTranslation('main_title', 'ar') !!}</textarea>

                                          </div>
                                          <div class="col-md-6">
                                              <label>النص الأول بالانجليزية * </label>
                                              <textarea name="main_title_en" required class="ckeditor" cols="30" rows="10">{!! @$firsts->getTranslation('main_title', 'en') !!}</textarea>

                                          </div>
                                      </div>
                                      <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>النص  الثاني بالعربية * </label>
                                                <textarea name="secand_title_ar" required class="ckeditor" cols="30" rows="10">{!! @$firsts->getTranslation('secand_title', 'ar') !!}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label>النص  الثاني بالانجليزية * </label>
                                                <textarea name="secand_title_en" required class="ckeditor" cols="30" rows="10">{!! @$firsts->getTranslation('secand_title', 'en') !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>الزر الأول بالعربية </label>
                                                <input type="text" name="first_btn_ar" class="form-control"
                                                    value="{{ @$firsts->getTranslation('first_btn', 'ar') }}" id="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>الزر الاول بالانجليزية </label>
                                                <input type="text" name="first_btn_en" class="form-control"
                                                    value="{{ @$firsts->getTranslation('first_btn', 'en') }}" id="">
                                            </div>
                                            <div class="col-md-4">
                                              <label>الرابط </label>
                                              <input type="text" name="first_link" class="form-control"
                                                  value="{{ @$firsts->first_link }}" id="">
                                          </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <label>الزر الثاني بالعربية </label>
                                              <input type="text" name="secand_btn_ar" class="form-control"
                                                  value="{{ @$firsts->getTranslation('secand_btn', 'ar') }}" id="">
                                          </div>
                                          <div class="col-md-4">
                                              <label>الزر الثاني بالانجليزية </label>
                                              <input type="text" name="secand_btn_en" class="form-control"
                                                  value="{{ @$firsts->getTranslation('secand_btn', 'en') }}" id="">
                                          </div>
                                          <div class="col-md-4">
                                            <label>الرابط </label>
                                            <input type="text" name="secand_link" class="form-control"
                                                value="{{ @$firsts->secand_link }}" id="">
                                        </div>
                                          
                                      </div>
                                  </div>
                                    <div class="form-actions left">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> {{ __('حفظ') }}
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
