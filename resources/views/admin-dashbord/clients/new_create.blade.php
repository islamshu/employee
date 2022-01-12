[@extends('layouts.backend')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">العملاء</h3>
            <div class="row breadcrumbs-top">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">العملاء</a>
                        </li>
                        <li class="breadcrumb-item active">اضافة عملاء
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
                        <h4 class="card-title" id="basic-layout-colored-form-control">اضافة عملاء</h4>
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
                            <form class="form" method="post" action="{{ route('post_new.client') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>بيانات العميل</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">اسم العميل</label>
                                                <input type="text" required value="{{ old('name') }}" id="userinput1"
                                                    class="form-control border-primary" placeholder="اسم العميل"
                                                    name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">البريد الإلكتروني </label>
                                                <input type="text" required value="{{ old('email') }}" id="userinput2"
                                                    class="form-control border-primary" placeholder="البريد الإلكتروني "
                                                    name="email">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput3">رقم الهاتف</label>
                                                <input type="number"  value="{{ old('phone') }}" required id="userinput3"
                                                    class="form-control border-primary" placeholder="رقم الهاتف"
                                                    name="phone">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">اسم الشركة</label>
                                                <input type="text" required id="userinput4" value="{{ old('company_name') }}"
                                                    class="form-control border-primary" placeholder="اسم الشركة"
                                                    name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">المسمى الوظيفي</label>
                                                <input list="brow" id="test" value="{{ old('job_title') }}" required name="job_title" class="form-control">
                                                <datalist id="brow">
                                                    @foreach ($jobs as $item)
                                                    <option value="{{$item->title}}">
                                                    @endforeach
                                                  
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">الموقع الإلكتروني </label>
                                                <input type="text" id="userinput4" value="{{ old('company_url') }}"
                                                    class="form-control border-primary" placeholder="الموقع الإلكتروني"
                                                    name="company_url">
                                            </div>
                                        </div>


                                    </div>
                                    <h4 class="form-section"><i class="la la-add"></i>السوشل ميديا</h4>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2"> فيس بوك </label>
                                                <input type="text"  value="{{ old('facebook') }}" 
                                                    class="form-control border-primary" placeholder="فيس بوك"
                                                    name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">  تويتر </label>
                                                <input type="text"  value="{{ old('twitter') }}" 
                                                    class="form-control border-primary" placeholder="تويتر "
                                                    name="twitter">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2"> الانستقرام </label>
                                                <input type="text"  value="{{ old('instagram') }}" 
                                                    class="form-control border-primary" placeholder="الانستقرام"
                                                    name="instagram">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2"> سناب شات </label>
                                                <input type="text"  value="{{ old('snapchat') }}" 
                                                    class="form-control border-primary" placeholder="سناب شات"
                                                    name="snapchat">
                                            </div>
                                        </div>
                                    </div>
                                        <h4 class="form-section"><i class="la la-add"></i> ملاحظات</h4>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="userinput2"> ملاحظات </label>
                                                <textarea name="notes" class="ckeditor"  cols="30" rows="10">{{ old('notes') }}</textarea>
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
    <script>
        $('#test').on('change', function() { // 2nd way
            var title = this.value;
            if(title != null){

            
            $.ajax({
                type: "get",
                dataType: "json",
                url: '{{ route('add.job_title') }}',
                data: {
                    'title': title,
                },


                success: function(data) {
                    if(data.status == 1){
                        
                        $('#brow').append(`<option value="`+ data.data['title'] + ` ">`);


                        alert('تم اضافة المسمى بنجاح')
                    }

                },
                error: function(data) {



                },
            });
        }else{
            alert('daa');
        }


        });
    </script>


@endsection]
