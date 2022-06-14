@extends('layouts.backend')
@section('content')
<div class="content-header row">
  <div class="content-header-left col-md-6 col-12 mb-2">
    <h3 class="content-header-title">شركائنا</h3>
    <div class="row breadcrumbs-top">
      <div class="breadcrumb-wrapper col-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">الرئيسية</a>
          </li>
          <li class="breadcrumb-item active">شركائنا
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
              <h4 class="card-title">شركائنا</h4>
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
              <div class="card-body card-dashboard">
                @include('inc.alerts.error')
                @include('inc.alerts.success')
                <form action="{{ route('partners_post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                    <input type="file" required name="image" class="form-control">
                            </div>
                    <input type="submit" value="حفظ" style="height: 40%" class="btn btn-primary">
                </form>
                <br>
                <br>
                <br>
                <br>

                <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                    <tr>
                      <th>الصورة</th>
                      <th>الاجراءات</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($partners as $project)
                        
                   
                    <tr>
                      <td> <img src="{{ asset('uploads/'.$project->image) }}" width="180" height="80"></td>

                
                  
                      <td>
                        <form style="display: inline" action="{{ route('partners_post_destroy',$project->id) }}" method="post">
                        @csrf @method('delete')
                        <button type="submit" class="btn btn-icon btn-danger mr-1 delete-confirm"><i class="la la-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Zero configuration table -->
    <!-- Default ordering table -->
  
    <!--/ Language - Comma decimal place table -->

@endsection