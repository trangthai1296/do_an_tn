<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use Illuminate\Support\Facades\Redirect;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if(empty($search)){
            $department = department::all();
            return view('quanlynhanvien.phongban.index',compact('department'));
        }
        else{
            $department =  department::where('id','like', "%$search%")
            ->orwhere('tenphongban','like', "%$search%")
            ->orwhere('matruongphong','like', "%$search%")
            ->orwhere('sdt','like', "%$search%")
            ->orwhere('diachi','like', "%$search%")->get();
            return view('quanlynhanvien.phongban.index',compact('department'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('quanlynhanvien.phongban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new department();
        $department->tenphongban = $request->tenphongban;
        $department->matruongphong = $request->matruongphong;
        $department->sdt = $request->sdt;
        $department->diachi = $request->diachi;
        $department->save();
        return Redirect::to('/departmentIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department=department::find($id);
       // dd( $department);
        return view ('quanlynhanvien.phongban.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department=department::find($id);
        $department->tenphongban = $request->tenphongban;
        $department->matruongphong = $request->matruongphong;
        $department->sdt = $request->sdt;
        $department->diachi = $request->diachi;
        $department->save();
        return Redirect::to('/departmentIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department=department::find($id);
        $department->delete();
        return Redirect::to('/departmentIndex');
    }
}