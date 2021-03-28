<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="name"> Nhóm tuần</label>
                <input type="text" class="form-control" placeholder="Tuần số" value="{{ old('nhom_tuan',isset($weeks->nhom_tuan) ? $weeks->nhom_tuan : '') }}" name="nhom_tuan" >
                @if($errors->has('nhom_tuan'))
                    <span class="error-text">
                {{ $errors->first('nhom_tuan') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Tuần Số </label>
                <input type="text" class="form-control" placeholder="Tuần số" value="{{ old('tentuan',isset($weeks->tentuan) ? $weeks->tentuan : '') }}" name="tentuan" >
                @if($errors->has('tentuan'))
                    <span class="error-text">
                {{ $errors->first('tentuan') }}
                    </span>
                @endif
            </div>
           
           
            <button type="submit" class="btn btn-success"> Lưu thông tin</button>
        </div>
    </div>
</form>
