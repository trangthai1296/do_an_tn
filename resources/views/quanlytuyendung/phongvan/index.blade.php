@extends('layouts.master')
@section('search')
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action ="{{route('interviewDetailIndex')}}" method = "get">
        <input type="text" class="form-control" placeholder="Search" name ="search">
      </form>
    </li>
  </ul>
@endsection
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('interviewDetailCreate')}}" style="width:100px;margin-bottom: 33px;">Thêm</a>

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Mã Kế Hoạch</th>
                      <th>Số Lượng CV</th>
                      <th>Số Vòng Phỏng Vấn</th>
                      <th>Số Lượng Đạt</th>
                      <th>Ngày Phỏng Vấn</th>
                      <th>Địa Điểm</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($interviewDetail as $i)
                    <tr>
                      <td>{{ $i->id }}</td>
                      <td>{{ $i->makehoach }}</td>
                      <td>{{ $i->soluongcv }}</td>
                      <td>{{ $i->soluongdat }}</td>
                      <td>{{ $i->sovongpv }}</td>
                      <td>{{ $i->ngayphongvan}}</td>
                      <td>{{ $i->diadiem}}</td>
                      <td><a href ="{{route('interviewDetailEdit',['id'=>$i->id])}}"><label class="badge badge-info">Sửa</label></a><td>
                    <td><a href ="{{route('interviewDetailDelete',['id'=>$i->id])}}"><label class="badge badge-danger">Xóa</label></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
