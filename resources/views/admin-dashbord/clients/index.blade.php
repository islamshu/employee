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
                        <li class="breadcrumb-item active">العملاء
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
                        <h4 class="card-title">العملاء</h4>
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
                            <a href="{{ route('clients.index') }}" style="float: left" class="btn btn-primary">أضف جديد</a>
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
                                        <th>اسم العميل</th>
                                        <th> البريد الإلكتروني </th>
                                        <th>رقم الهاتف </th>
                                        <th>بطاقة الأعمال </th>
                                        <th>الإجرائات</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($clients as $item)


                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            @if($item->image == null)
                                            <td><a target="_blank"  href="{{ $item->link }}">رؤية البطاقة</a></td>
                                            @else
                                            <td><a target="_blank" href="{{ $item->link }}"><img src="{{ asset('uploads/'.$item->image) }}" width="100" height="70" ></a></td>
                                            @endif

                                            <td>
                                                <a  href="{{ route('clients.edit', $item->id) }}"
                                                    class="btn btn-icon btn-primary mr-1"> <i
                                                        class="la la-edit"></i></a>
                                                <form  style="display: inline"
                                                    action="{{ route('clients.destroy', $item->id) }}" method="post">
                                                    @csrf @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-danger mr-1 delete-confirm"><i
                                                            class="la la-trash"></i></button>
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
@endsection

