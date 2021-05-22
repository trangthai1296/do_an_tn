@extends('layouts.master')
@section('search')
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action ="{{route('salaryIndex')}}" method = "get">
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
                <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('salaryCreate')}}" style="width:100px;margin-bottom: 33px;">Thêm</a>

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Mã Nhân Viên</th>
                      <th>Họ Tên</th>
                      <th>Số Ngày Công</th>
                      <th>Số Giờ Làm Thêm</th>
                      <th>Lương Hành Chính</th>
                      <th>Lương Tăng Ca</th>
                      <th>Phụ Cấp</th>
                      <th>Khẩu Trừ</th>
                      <th>Thực Lĩnh</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($salary as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                      <td>{{ $i->manhanvien }}</td>
                      <td>{{ $i->hoten }}</td>
                      <td>{{ $i->songaycong }}</td>
                      <td>{{ $i->sogiolamthem }}</td>
                      <td>{{ $i->luonghanhchinh }}</td>
                      <td>{{ $i->luonglamthem}}</td>
                      <td>{{ $i->phucap }}</td>
                      <td>{{ $i->khautru }}</td>
                      <td>{{ $i->thuclinh }}</td>

                      {{-- <td>{{ $i->khautru }}</td>
                      <td>{{ $i->thuclinh }}</td> --}}

                      <td><a href ="{{route('salaryEdit',['id'=>$i->id])}}"><label class="badge badge-info">Sửa</label></a><td>
                    <td><a href ="{{route('salaryDelete',['id'=>$i->id])}}"><label class="badge badge-danger">Xóa</label></a></td>
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
