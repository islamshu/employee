@extends('layouts.backend')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
      <h3 class="content-header-title">رسائل التواصل</h3>
      <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">الرئيسية</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">رسائل التواصل</a>
            </li>
            <li class="breadcrumb-item active">رسائل التواصل
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
            <h4 class="card-title" id="basic-layout-colored-form-control">رسائل التواصل</h4>
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

             
                <div class="form-body">
                  <h4 class="form-section"><i class="la la-add"></i>رسائل التواصل</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput1">الاسم</label>
                        <input type="text" readonly  value="{{ $contact->name }}" id="userinput1" class="form-control border-primary" placeholder="الاسم"
                        name="name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput2">البريد الإلكتروني</label>
                        <input type="email" readonly value="{{ $contact->email }}"  id="userinput2" class="form-control border-primary" placeholder="البريد الإلكتروني"
                        name="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput11">رقم الهاتف</label>
                        <input type="text" readonly  value="{{ $contact->phone }}"  id="userinput11"  class="form-control border-primary" placeholder="رقم العضوية"
                        name="membership_no">
                      </div>
                    </div>
                 
              
                  
                  </div>
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="userinput4">الموضوع</label>
                        <textarea  class="form-control" readonly >{{ $contact->message }}</textarea>
                      </div>
                    </div>
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