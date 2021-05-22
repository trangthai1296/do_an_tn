@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update</h4>
                        <form action="{{route('checkDoiMatKhau',['id'=>Auth::user()->id])}}" method="post">
                            {{@csrf_field()}}
                            <div class="form-group">
                                <label for="password">Mật khẩu cũ</label>
                                <input type="text" class="form-control" name="password"
                                    value="{{Auth::user()->password}}">
                            </div>
                            <div class="form-group">
                                <label for="role">Mật khẩu mới</label>
                                <input type="text" class="form-control" name="passwordnew">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="save">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection