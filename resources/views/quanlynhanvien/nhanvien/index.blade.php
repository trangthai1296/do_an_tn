@extends('layouts.master')
@section('search')
<ul class="navbar-nav w-100">
    <li class="nav-item w-100">
      <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action ="{{route('employeeIndex')}}" method = "get">
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
                <a class="nav-link btn btn-success create-new-button" id="create" href="{{route('employeeCreate')}}" style="width:100px;margin-bottom: 33px;">Thêm</a>

                <table class="table">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Họ Tên</th>
                      <th>Ngày Sinh</th>
                      <th>Địa Chỉ</th>
                      <th>SDT</th>
                      <th>Dân Tộc</th>
                      <th>CMND</th>
                      <th>Giới Tính</th>
                      <th>Trình Độ</th>
                      <th>Mã Phòng Ban</th>
                      <th>Mã Cấp Bậc</th>
                      <th>Mã Hợp Đồng</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employee as $i)
                    <tr>
                      <td>{{ $i->id }}</td>
                      <td>{{ $i->hoten }}</td>
                      <td>{{ $i->ngaysinh }}</td>
                      <td>{{ $i->diachi }}</td>
                      <td>{{ $i->sdt }}</td>
                      <td>{{ $i->dantoc }}</td>
                      <td>{{ $i->CMND }}</td>
                      <td>{{ $i->gioitinh }}</td>
                      <td>{{ $i->trinhdo }}</td>
                      <td>{{ $i->maphongban }}</td>
                      <td>{{ $i->macapbac }}</td>
                      <td>{{ $i->mahopdong }}</td>
                      <td><a href ="{{route('employeeEdit',['id'=>$i->id])}}"><label class="badge badge-info">Sửa</label></a><td>
                    <td><a href ="{{route('employeeDelete',['id'=>$i->id])}}"><label class="badge badge-danger">Xóa</label></a></td>
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
