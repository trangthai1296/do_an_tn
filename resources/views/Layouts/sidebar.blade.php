<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href = "{{asset('')}}">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a href ="{{route('index')}}" class="sidebar-brand brand-logo"  style="font-family: 'Playball', cursive;font-size:35px;color: #5e0afb">Hello {{Auth::user()->name}}</a>
        </div>
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Trang Chủ</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth1" aria-expanded="false" aria-controls="auth1">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản Lý Nhân Viên</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('departmentIndex')}}"> Phòng ban </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('positionIndex')}}">Chức vụ </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('employeeIndex')}}"> Hồ sơ nhân viên</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('relativeIndex')}}">Người thân nhân viên</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth2">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản Lý Chế Độ</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('contractIndex')}}"> Hợp đồng </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('bonusIndex')}}">Khen thưởng</a></li>
                 <li class="nav-item"> <a class="nav-link" href="{{route('disciplineIndex')}}">Kỷ luật </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth3">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản Lý Lương</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth3">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item"> <a class="nav-link" href="{{route('timesheetIndex')}}"> Bảng chấm công </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('salaryIndex')}}"> Bảng lương </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth4">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản Lý Tuyển Dụng</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('planeRecruitmentIndex')}}">Kế hoạch tuyển dụng</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('interviewDetailIndex')}}">Phỏng vấn</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('probationaryIndex')}}">Thử việc</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth5" aria-expanded="false" aria-controls="auth5">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Thống Kê Báo Cáo</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth5">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{route('bonusDetailIndex')}}"> Chi tiết khen thưởng </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('disciplineDetailIndex')}}">Chi tiết kỷ luật </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('diligenceIndex')}}">Nghỉ phép-không phép </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth6" aria-expanded="false" aria-controls="auth6">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Quản Trị Hệ Thống</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('userIndex')}}"> Quản lý người dùng </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
