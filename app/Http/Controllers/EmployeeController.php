<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Redirect;
use App\Models\Department;
use App\Models\position;
class EmployeeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if(empty( $search )){
            $employee = employee::all();
            //dd($employee);
            return view('quanlynhanvien.nhanvien.index', compact('employee'));
        }
        else{
            $employee = employee::where('hoten','like', "%$search%")
            ->orwhere('ngaysinh','like', "%$search%")
            ->orwhere('diachi','like', "%$search%")
            ->orwhere('sdt','like', "%$search%")
            ->orwhere('dantoc','like', "%$search%")
            ->orwhere('gioitinh','like', "%$search%")
            ->orwhere('CMND','like', "%$search%")
            ->get();
            return view('quanlynhanvien.nhanvien.index', compact('employee'));
        }
        // $employee = employee::all();
        // //dd($employee);
        // return view('quanlynhanvien.nhanvien.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deparment= Department::all('id','tenphongban');
        $position = position::all('id','tenchucvu');

        return view ('quanlynhanvien.nhanvien.create', compact('deparment','position'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new employee();
        $employee->hoten = $request->hoten;
        $employee->ngaysinh = $request->ngaysinh;
        $employee->diachi = $request->diachi;
        $employee->sdt = $request->sdt;
        $employee->dantoc = $request->dantoc;
        $employee->CMND = $request->CMND;
        $employee->gioitinh = $request->gioitinh;
        $employee->trinhdo = $request->trinhdo;
        $employee->maphongban = $request->maphongban;
        $employee->macapbac = $request->macapbac;
        $employee->mahopdong = $request->mahopdong;

        $employee->save();
        return Redirect::to('/employeeIndex');
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
        $employee = employee::find($id);
        return view('quanlynhanvien.nhanvien.edit', compact('employee'));
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
        $employee = employee::find($id);
        $employee->hoten = $request->hoten;
        $employee->ngaysinh = $request->ngaysinh;
        $employee->diachi = $request->diachi;
        $employee->sdt = $request->sdt;
        $employee->dantoc = $request->dantoc;
        $employee->CMND = $request->CMND;
        $employee->gioitinh = $request->gioitinh;
        $employee->trinhdo = $request->trinhdo;
        $employee->maphongban = $request->maphongban;
        $employee->macapbac = $request->macapbac;
        $employee->mahopdong = $request->mahopdong;

        $employee->save();
        return Redirect::to('/employeeIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return Redirect::to('/employeeIndex');
    }
}