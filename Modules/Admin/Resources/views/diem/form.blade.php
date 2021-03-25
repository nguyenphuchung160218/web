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
                                    <option value="{{ $item->id }}">{{ $item->tentuan }}</option>
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
                                    <option value="{{ $item->id }}">{{ $item->ten }}</option>
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
                                    <input type="text" class="form-control" placeholder="" value="" name="hoctap">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="slhoctap">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="vanthe">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="slvanthe">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="daoduc">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="sldaoduc">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for=""> Nhập Tổng Điểm:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="hoatdongkhac">
                                    <label for=""> Số Lần Trừ:</label>
                                    <input type="text" class="form-control" placeholder="" value="" name="slhoatdongkhac">
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