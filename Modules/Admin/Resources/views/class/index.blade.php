@extends('admin::layouts.master')

@section('content')
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard <small>Statistics Overview</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>
          </div>
      </div>
    <div class="table-responsive">
        <h3>Quản lý Lớp <a href="{{ route('admin.get.create.class') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
        <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th class="th-sm">Stt

              </th>
              <th class="th-sm">Tên Lớp

              </th>
              <th class="th-sm">Khối

              </th>           
              <th class="th-sm">Tên giáo viên

              </th>
              <th class="th-sm">Sĩ số

              </th>
              <th class="th-sm">Thao tác

              </th>
            </tr>
            </thead>
            <tbody>
                @if(isset($class))
                    @foreach($class as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->ten }}</td>
                            <td>{{ $class->khoi }}</td>
                            <td>{{ $class->tengiaovien}}</td>
                            <td>{{ $class->siso}}</td>
                            <td>
                                <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.get.edit.class',$class->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                                <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.get.action.class',['delete',$class->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
  </div>
@stop



