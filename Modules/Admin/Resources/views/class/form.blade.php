<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="name"> Tên Lớp </label>
                <input type="text" class="form-control" placeholder="Tên lớp" value="{{ old('ten',isset($class->ten) ? $class->ten : '') }}" name="ten" >
                @if($errors->has('ten'))
                    <span class="error-text">
                {{ $errors->first('ten') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Khối</label>
                <input type="text" class="form-control" placeholder="Tên khối" value="{{ old('khoi',isset($class->khoi) ? $class->khoi : '') }}" name="khoi" >
                @if($errors->has('khoi'))
                    <span class="error-text">
                {{ $errors->first('khoi') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Tên giáo viên </label>
                <input type="text" class="form-control" placeholder="Tên giáo viên" value="{{ old('tengiaovien',isset($class->tengiaovien) ? $class->tengiaovien : '') }}" name="tengiaovien" >
                @if($errors->has('tengiaovien'))
                    <span class="error-text">
                   {{ $errors->first('tengiaovien') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="siso"> Sĩ số</label>
                <input type="text" class="form-control" placeholder="Sĩ Số lớp" value="{{ old('siso',isset($class->siso) ? $class->siso : '') }}" name="siso" >
                @if($errors->has('siso'))
                    <span class="error-text">
                 {{ $errors->first('siso') }}
                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-success"> Lưu thông tin</button>
        </div>
    </div>
</form>
