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
                        <div>
                            <a href="{{ route('communication.create') }}" style="float: left" class="btn btn-primary">أضف جديد</a>
                        </div>
                        <br>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            @include('inc.alerts.error')
                            @include('inc.alerts.success')

                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>اسم الشركة</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>رقم الهاتف</th>
                                        <th>آلية التواصل</th>
                                        <th>حالة التواصل</th>
                                        <th>الحالة </th>

                                        <th>الإجرائات</th>
                                    </tr>
                                </thead>
                                <tbody class="sort_menu">
                                    @foreach ($coms as $item)
                                   
        
                                        <tr>
                                            <td >{{ $item->company_name }}</td>
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
                                            </td>

                                            <td >
                                                <a href="{{ route('communication.edit', $item->id) }}"
                                                    class="btn btn-icon btn-primary mr-1"> <i
                                                        class="la la-edit"></i></a>
                                                <form style="display: inline"
                                                    action="{{ route('communication.destroy', $item->id) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-danger mr-1 delete-confirm"><i
                                                            class="la la-trash"></i></button>
                                                </form>
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
  
@endsection


