@extends('layouts.master')
@section('search')
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action ="{{route('quitIndex')}}" method = "get">
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
                <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('quitCreate')}}" style="width:100px;margin-bottom: 33px;">Thêm</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Mã Nhân Viên</th>
                      <th>Lý Do</th>
                      <th>Tình Trạng</th>
                      <th>Ngày Nghỉ</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($quit as $i)
                    <tr>
                      <td>{{ $i->id }}</td>
                      <td>{{ $i->manhanvien }}</td>
                      <td>{{ $i->lydo }}</td>
                      <td>{{ $i->tinhtrang }}</td>
                      <td>{{ $i->ngaynghi }}</td>
                      <td><a href ="{{route('quitEdit',['id'=>$i->id])}}"><label class="badge badge-info">Sửa</label></a><td>
                    <td><a href ="{{route('quitDelete',['id'=>$i->id])}}"><label class="badge badge-danger">Xóa</label></a></td>
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
