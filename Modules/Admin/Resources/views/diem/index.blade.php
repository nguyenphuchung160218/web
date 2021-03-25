@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Điểm</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h3>Quản lý bài viết <a href="{{ route('get.diem.create') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
        <table id="dtBasicExample" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 20%;">Tên bài viết</th>
                    <th style="width: 100px;">Hình ảnh</th>
                    <th style="width: 300px;">Mô tả</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
           <!--  @if(isset($articles))
                @foreach($articles as $article) -->
                    <tr>
                        <td></td>
                        <td></td>

                        </td></td>
                        <td></td>
                        <td>
                            <a class="btn btn-info" style="font-size: 12px" href=""><i class="fa fa-pencil"></i> Cập nhật</a>
                            <a class="btn btn-danger" style="font-size: 12px" href=""><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
               <!--  @endforeach
            @endif -->
            </tbody>
        </table>
    </div>
@stop
