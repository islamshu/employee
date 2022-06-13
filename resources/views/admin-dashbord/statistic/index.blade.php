@extends('layouts.backend')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">الاحصائيات</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item active">الاحصائيات
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

                            <form class="form" method="post"
                                action="{{ route('statistic.post', @$statistic->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>الاحصائيات</h4>
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>النص الرئيسي بالعربية * </label>
                                                <input type="text" required name="main_title_ar" class="form-control"
                                                    value="{!! @$statistic->getTranslation('main_title', 'ar') !!}" id="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>النص الرئيسي بالانجليزية * </label>
                                                <input type="text" required name="main_title_en" class="form-control"
                                                    value="{!! @$statistic->getTranslation('main_title', 'ar') !!}" id="">

                                            </div>
                                        </div>
                                        <br>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label>الاحصائية الاولى بالعربية* </label>
                                                    <input type="text" required name="title1_ar" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title1', 'ar') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>الاحصائية الاولى بالانجليزية* </label>
                                                    <input type="text" required name="title1_en" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title1', 'en') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>رقم الاحصائية الاولى* </label>
                                                    <input type="text" required name="num1" class="form-control"
                                                        value="{!! @$statistic->number1 !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>ايقونة الاحصائية الاولى* </label>
                                                    <input type="text" required name="icon1" class="form-control"
                                                        value="{!! @$statistic->icon1 !!}" id="">
                                                </div>



                                            </div>
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label>الاحصائية الثانية بالعربية* </label>
                                                    <input type="text" required name="title2_ar" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title2', 'ar') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>الاحصائية الثانية بالانجليزية* </label>
                                                    <input type="text" required name="title2_en" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title2', 'en') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>رقم الاحصائية الثانية* </label>
                                                    <input type="text" required name="num2" class="form-control"
                                                        value="{!! @$statistic->number2 !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>ايقونة الاحصائية الثانية* </label>
                                                    <input type="text" required name="icon2" class="form-control"
                                                        value="{!! @$statistic->icon2 !!}" id="">
                                                </div>



                                            </div>
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label>الاحصائية الثالثة بالعربية* </label>
                                                    <input type="text" required name="title3_ar" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title3', 'ar') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>الاحصائية الثالثة بالانجليزية* </label>
                                                    <input type="text" required name="title3_en" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title3', 'en') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>رقم الاحصائية الثالثة* </label>
                                                    <input type="text" required name="num3" class="form-control"
                                                        value="{!! @$statistic->number3 !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>ايقونة الاحصائية الثالثة* </label>
                                                    <input type="text" required name="icon3" class="form-control"
                                                        value="{!! @$statistic->icon3 !!}" id="">
                                                </div>



                                            </div>
                                        </fieldset>
                                        <br>
                                        <fieldset>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label>الاحصائية الرابعة بالعربية* </label>
                                                    <input type="text" required name="title4_ar" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title4', 'ar') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>الاحصائية الرابعة بالانجليزية* </label>
                                                    <input type="text" required name="title4_en" class="form-control"
                                                        value="{!! @$statistic->getTranslation('title4', 'en') !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>رقم الاحصائية الرابعة* </label>
                                                    <input type="text" required name="num4" class="form-control"
                                                        value="{!! @$statistic->number4 !!}" id="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>ايقونة الاحصائية الرابعة* </label>
                                                    <input type="text" required name="icon4" class="form-control"
                                                        value="{!! @$statistic->icon4 !!}" id="">
                                                </div>



                                            </div>
                                        </fieldset>
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
