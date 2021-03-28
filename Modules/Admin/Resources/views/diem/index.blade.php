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
                    <th style="width: 90px;">Tuần Số</th>
                    <th style="width: 100px;">Điểm học tập</th>
                    <th style="width: 100px;">Điểm đạo đức</th>
                    <th style="width: 120px;">Điểm văn thế mĩ</th>
                    <th style="width: 170px;">Điểm hoạt động khác</th>
                    <th style="width: 100px;">Lớp</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($diems))
                @foreach($diems as $diem)
                    <tr>
                        <td>{{$diem->id}}</td>
                        <td>Tuần {{ $diem->tentuan}}</td>
                        <td> 
                            <span>{{ $diem->hoctap}}</span>
                            <ul style="margin-left: -30px">
                            <li><span>Điểm trừ</span>
                                <span>{{100-$diem->hoctap}}</span></li>
                            <li><span>Số lần trừ:</span><span>{{$diem->slhoctap}}</span></li>
                            </ul>
                        </td>

                        <td>
                         <span>{{ $diem->daoduc}}</span>
                            <ul style="margin-left: -30px">
                            <li><span>Điểm trừ</span>
                                <span>{{100-$diem->daoduc}}</span></li>
                            <li><span>Số lần trừ:</span><span>{{$diem->sldaoduc}}</span></li>
                            </ul>
                        </td>
                        <td>
                             <span>{{ $diem->vanthemi}}</span>
                            <ul style="margin-left: -30px">
                            <li><span>Điểm trừ</span>
                                <span>{{100-$diem->vanthemi}}</span></li>
                            <li><span>Số lần trừ:</span><span>{{$diem->slvanthe}}</span></li>
                            </ul>
                        </td>
                         <td>
                             <span>{{
                                isset($diem->diemcong) ?
                                 $diem->diemcong+ $diem->hoatdongkhac :
                                 $diem->hoatdongkhac
                             }}</span>
                            <ul style="margin-left: -30px">
                            <li><span>Điểm trừ</span>
                                <span>{{100-$diem->hoatdongkhac}}</span></li>
                            <li><span>Số lần trừ:</span><span>{{$diem->slhoatdongkhac}}</span></li>
                            <li><span>Số điểm cộng:</span><span>{{$diem->diemconghoatdong}}</span></li>
                            <li><span>Số lần cộng:</span><span>{{$diem->solanconghoatdong}}</span></li>
                            </ul>
                        </td>
                        <td>
                             <span>Lớp  </span><span><span>{{$diem->tenlop}}</span>
                             <ul style="margin-left: -30px">
                                <li><span>Khối  :</span><span><span>{{$diem->lopkhoi}}</span></li>
                             <ul>
                        </td>
                        <td>
                             <a class="btn btn-info" style="font-size: 12px;" href="{{ route('get.diem.edit.class',$diem->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                            <a class="btn btn-danger" style="font-size: 12px" href=""><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@stop
