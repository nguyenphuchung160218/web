@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Bài viết</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            @include('admin::diem.form')
        </div>
    </div>
@stop
article
