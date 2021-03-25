@extends('admin::layouts.master')

@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Trang chủ</a></li>
            <li><a href="{{ route('admin.get.list.class') }}">Danh mục</a></li>
            <li class="active">Cập nhật</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            @include('admin::class.form')
        </div>
    </div>
@stop
