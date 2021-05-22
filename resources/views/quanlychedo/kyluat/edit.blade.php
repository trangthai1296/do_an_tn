@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Sửa kỷ luật</h4>
              <form action = "{{route('disciplineUpdate',['id'=>$discipline->id])}}" method="post">
                {{@csrf_field()}}
                <div class="form-group">
                  <label for="hinhthuckiluat">Hình thức kỷ luật</label>
                  <input type="text" class="form-control" name= "hinhthuckiluat" value="{{$discipline->hinhthuckiluat}}"  >
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
