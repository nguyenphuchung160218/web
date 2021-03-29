<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="form-group">
                            <select name="tuan_id" id="input" class="form-control" required="required">
                                <option value="0">--Chọn Tuần--</option>
                                @if(isset($week))

                                @foreach($week as $item)
                                    <option value="{{ $item->id }}" {{ old('tuan_id',isset($diem->tuan_id) ? $diem->tuan_id : '') == $item->id ? "selected='selected'" : "" }}>{{ $item->tentuan }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="form-group">
                            <select name="lop_id" id="input" class="form-control" required="required">
                                <option value="">--Chọn Lớp--</option>
                                @if(isset($class1))
                                @foreach($class1 as $item)
                                    <option value="{{ $item->id }}" {{ old('lop_id',isset($diem->lop_id) ? $diem->lop_id : '') == $item->id ? "selected='selected'" : "" }}>{{ $item->ten }}</option>
                                @endforeach
                                @endif
                            </select>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Điểm Học Tập</th>
                            <th>Điểm Văn Thể</th>
                            <th>Điểm Đạo Đức-Tác Phong</th>
                            <th>Điểm Hoạt Động Khác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('hoctap',isset($hoctap->tongdiem) ? $hoctap->tongdiem : '') }}" name="hoctap">
                                    <label for=""> Điểm Trừ / lần:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('truhoctap',isset($hoctap->diemtru) ? $hoctap->diemtru : '') }}" name="truhoctap">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('hoctap',isset($hoctap->solantru) ? $hoctap->solantru : '') }}" name="slhoctap">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('vanthe',isset($vanthe->tongdiem) ? $vanthe->tongdiem : '') }}" name="vanthe">
                                    <label for=""> Điểm Trừ / lần:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('truvanthe',isset($vanthe->diemtru) ? $vanthe->diemtru : '') }}" name="truvanthe">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('vanthe',isset($vanthe->solantru) ? $vanthe->solantru : '') }}" name="slvanthe">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('daoduc',isset($daoduc->tongdiem) ? $daoduc->tongdiem : '') }}" name="daoduc">
                                    <label for=""> Điểm Trừ / lần:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('trudaoduc',isset($daoduc->diemtru) ? $daoduc->diemtru : '') }}" name="trudaoduc">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('daoduc',isset($daoduc->solantru) ? $daoduc->solantru : '') }}" name="sldaoduc">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('hoatdongkhac',isset($hoatdongkhac->tongdiem) ? $hoatdongkhac->tongdiem : '') }}" name="hoatdongkhac">
                                    <label for=""> Điểm Trừ / lần:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('truhoatdongkhac',isset($hoatdongkhac->diemtru) ? $hoatdongkhac->diemtru : '') }}" name="truhoatdongkhac">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="number" class="form-control" placeholder="" value="{{old('hoatdongkhac',isset($hoatdongkhac->solantru) ? $hoatdongkhac->solantru : '') }}" name="slhoatdongkhac">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <button type="submit" class="btn btn-success"> Lưu thông tin</button>

    </div>

</form>
