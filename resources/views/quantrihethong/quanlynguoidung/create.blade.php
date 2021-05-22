@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add new</h4>
              <form action = "{{route('userStore')}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name= "name"  >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name= "email" >
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name= "password"  >
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="number" class="form-control" name= "role">
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
