@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Thêm Mới</h4>
              <form action = "{{route('interviewDetailUpdate',['id'=>$interviewDetail->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="makehoach">Mã kế hoạch</label>
                  <input type="text" class="form-control" name="makehoach" value="{{$interviewDetail->makehoach}}" >
                </div>
                <div class="form-group">
                  <label for="soluongcv">Số lượng CV</label>
                  <input type="number" class="form-control" name= "soluongcv" value="{{$interviewDetail->soluongcv}}">
                </div>
                <div class="form-group">
                    <label for="soluongdat">Số lượng đạt</label>
                    <input type="number" class="form-control" name="soluongdat" value="{{$interviewDetail->soluongdat}}" >
                  </div>
                  <div class="form-group">
                    <label for="sovongpv">Số vòng phỏng vấn</label>
                    <input type="number" class="form-control" name= "sovongpv" value="{{$interviewDetail->sovongpv}}">
                  </div>
                  <div class="form-group">
                    <label for="ngayphongvan">Ngày phỏng vấn</label>
                    <input type="date" class="form-control" name= "ngayphongvan" value="{{$interviewDetail->ngayphongvan}}">
                  </div>
                  <div class="form-group">
                    <label for="diadiem">Địa điểm</label>
                    <input type="text" class="form-control" name= "diadiem" value="{{$interviewDetail->diadiem}}">
                  </div>
                <button type="submit" class="btn btn-primary mr-2" name ="save">Save</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
