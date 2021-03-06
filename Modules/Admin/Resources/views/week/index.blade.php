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
        <h3>Quản lý Tuần <a href="{{ route('admin.get.create.week') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
        <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th class="th-sm">Nhóm tuần

              </th>
              <th class="th-sm">Tên tuần

              </th>

               <th class="th-sm">Trạng thái

              </th>
              <th class="th-sm">Thao tác

              </th>
            </tr>
            </thead>
            <tbody>
                @if(isset($weeks))
                    @foreach($weeks as $week)
                        <tr>
                            <td>{{ $week->nhom_tuan }}</td>
                            <td>{{ $week->tentuan }}</td>
            
                             <td>
                                <a href="{{ route('admin.get.action.week',['status',$week->id]) }}" class="label {{ $week->getStatus($week->t_status)['class'] }}">{{ $week->getStatus($week->t_status)['name'] }}</a>
                            </td>
                           
                            <td>
                                <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.get.edit.week',$week->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                                <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.get.action.week',['delete',$week->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
  </div>
@stop



