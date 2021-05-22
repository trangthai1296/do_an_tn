@extends('layouts.master')
@section('search')
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action ="{{route('contractIndex')}}" method = "get">
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
                <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('contractCreate')}}" style="width:100px;margin-bottom: 33px;">Thêm</a>

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Lương Cơ Bản (/giờ)</th>
                      <th>Lương Tăng Ca (/giờ)</th>
                      <th>BHXH</th>
                      <th>Phụ Cấp</th>
                      <th>Thai sản</th>
                      <th>Thời Hạn Hợp Đồng (năm)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contract as $i)
                    <tr>
                      <td>{{ $i->id }}</td>
                      <td>{{ $i->luongcoban }}</td>
                      <td>{{ $i->luongtangca }}</td>
                      <td>{{ $i->BHXH }}</td>
                      <td>{{ $i->phucap}}</td>
                      <td>{{ $i->thaisan }}</td>
                      <td>{{ $i->thoihanhopdong }}</td>
                      <td><a href ="{{route('contractEdit',['id'=>$i->id])}}"><label class="badge badge-info">Sửa</label></a><td>
                    <td><a href ="{{route('contractDelete',['id'=>$i->id])}}"><label class="badge badge-danger">Xóa</label></a></td>
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
