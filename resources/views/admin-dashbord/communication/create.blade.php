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
                        <li class="breadcrumb-item"><a href="">بيانات التواصل مع العملاء</a>
                        </li>
                        <li class="breadcrumb-item active">اضافة جديد
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
                        <h4 class="card-title" id="basic-layout-colored-form-control">اضافة جديد</h4>
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
                            <form class="form" method="post" action="{{ route('communication.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>إضافة جديد</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">اسم الشركة</label>
                                                <input type="text" required value="{{ old('company_name') }}" id="userinput1"
                                                    class="form-control border-primary" placeholder="اسم الشركة" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">البريد الإلكتروني </label>
                                                <input type="email" required value="{{ old('email') }}" id="userinput2"
                                                    class="form-control border-primary" placeholder="البريد الإلكتروني "
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">رقم الهاتف</label>
                                                <input type="text" required value="{{ old('phone') }}" id="userinput2"
                                                    class="form-control border-primary" placeholder="رقم الهاتف "
                                                    name="phone">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">آلية التواصل</label>
                                                <select name="communication" required class="form-control">
                                                    <option value="" selected  disabled>اختر آلية التواصل</option>
                                                    <option value="email" @if(old('communication') =='email') selected @endif>البريد الإلكتروني</option>
                                                    <option value="phone" @if(old('communication') =='phone') selected @endif>رقم الهاتف</option>
                                                    <option value="meet" @if(old('communication') =='meet') selected @endif>اجتماع</option>
                                                    <option value="online" @if(old('communication') =='online') selected @endif>اون لاين</option>
                                                    <option value="event" @if(old('communication') =='event') selected @endif>حدث</option>
                                                    <option value="other" @if(old('communication') =='other') selected @endif>آخرى</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">حالة الرد</label>
                                                <select name="status" required id="status" class="form-control">
                                                    <option value="" selected disabled>اختر  حالة التواصل</option>

                                                    <option value="respond" @if(old('status') =='respond') selected @endif>استجاب</option>
                                                    <option value="not_Respond"@if(old('status') =='not_Respond') selected @endif>غير مستجاب</option>                                 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="unresponse" style="display: none">
                                            <div class="form-group">
                                                <label for="userinput4">الحالة </label>
                                                <select name="status2" id="status2"  class="form-control">
                                                    <option value="" selected  disabled>اختر  حالة التواصل</option>

                                                    <option value="interested" @if(old('status2') =='interested') selected @endif>مهتم</option>
                                                    <option value="not_Interested" @if(old('status2') =='not_Interested') selected @endif>غير مهتم</option>    
                                                    <option value="negotiation" @if(old('status2') =='negotiation') selected @endif>تفاوض</option>                              
                             
                                                </select>
                                            </div>
                                        </div>
                                     
                                      

                                    </div>
                                    <div class="form-actions left">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> حفظ
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
@section('script')
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