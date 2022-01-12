@extends('layouts.backend')
@section('content')
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
    <section id="basic-form-layouts">
        <div class="row match-height">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-colored-form-control">اضافة خدمة</h4>
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
                            <form class="form" method="post" action="{{ route('services.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>اسم الخدمة </h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">اسم الخدمة</label>
                                                <input type="text" required value="{{ old('title') }}" id="userinput1"
                                                    class="form-control border-primary" placeholder="اسم القسم" name="title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">السعر </label>
                                                <input type="text" required value="{{ old('price') }}" id="userinput1"
                                                    class="form-control border-primary" placeholder="السعر " name="price">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">النوع </label>
                                               <select name="type" id="select_servce" class="form-control">
                                                <option value="" selected disabled>اختر نوع الخدمة </option>

                                                   <option value="duration">مدة </option>
                                                   <option value="qty" >كمية</option>

                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6"  id="duration" style="display: none">
                                            <div class="form-group">
                                                <label for="userinput1">المدة </label>
                                                <input type="text" value="{{ old('duration') }}" 
                                                    class="form-control border-primary" placeholder="المدة " id="id_duration" name="duration">
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="qty" style="display: none">
                                            <div class="form-group">
                                                <label for="userinput1">الكمية </label>
                                                <input type="text"   value="{{ old('qty') }}" 
                                                    class="form-control border-primary" placeholder="الكمية " id="id_qty" name="qty">
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
      $("#select_servce").change(function(){ 
        var state =  $(this).val();
       
        if(state == 'duration'){
            $("#duration").css("display", "block");
            $("#id_duration").attr("required", true);
            $("#qty").css("display", "none");
            $("#id_qty").attr("required", false);
        }else{
            $("#duration").css("display", "none");
            $("#id_duration").attr("required", false);
            $("#qty").css("display", "block");
            $("#id_qty").attr("required", true);

        }
        
      });
    
    });
</script>
@endsection