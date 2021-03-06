@extends('layouts.backend')
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
                        <li class="breadcrumb-item active">تعديل عملاء
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
                        <h4 class="card-title" id="basic-layout-colored-form-control">تعديل عملاء</h4>
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
                            <form class="form" method="post" action="{{ route('clients.update',$client->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-add"></i>تعديل عملاء</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput1">اسم العميل</label>
                                                <input type="text" required value="{{ $client->name }}" id="userinput1"
                                                    class="form-control border-primary" placeholder="اسم العميل" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput2">البريد الإلكتروني </label>
                                                <input type="text" required value="{{ $client->email }}" id="userinput2"
                                                    class="form-control border-primary" placeholder="البريد الإلكتروني "
                                                    name="email">
                                            </div>
                                        </div>
                                        
                                    
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput3">رقم الهاتف</label>
                                                <input type="number" value="{{ $client->phone }}" required id="userinput3"
                                                    class="form-control border-primary" placeholder="رقم الهاتف"
                                                    name="phone">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4">صورة بطاقة الاعمال (اختياري)</label>
                                                <input type="file"  id="userinput4" value="{{ old('image') }}"
                                                    class="form-control border-primary" placeholder=" صورة بطاقة الاعمال"
                                                    name="image">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userinput4"> رابط بطاقة الاعمال  </label>
                                                <input type="url" required id="userinput4" value="{{ $client->link }}"
                                                    class="form-control border-primary" placeholder="رابط بطاقة الاعمال"
                                                    name="link">
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