@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Tuần</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h3>Quản lý Tuần <a href="{{ route('admin.get.create.week') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
        <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th class="th-sm">Stt

              </th>
              <th class="th-sm">Tên tuần

              </th>
              <th class="th-sm">Lớp

              </th>           
              <th class="th-sm">Tổng điểm

              </th>
              <th class="th-sm">Thao tác

              </th>
            </tr>
            </thead>
            <tbody>
                @if(isset($weeks))
                    @foreach($weeks as $week)
                        <tr>
                            <td>{{ $week->id }}</td>
                            <td>{{ $week->tentuan }}</td>
                            <td></td>
                            <td></td>
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
@stop



