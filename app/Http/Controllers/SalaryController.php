<?php

namespace App\Http\Controllers;

use App\Models\salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     
     */
    public function index(Request $request)
    {
        $search = $request->search;
        if (empty($search)) {
            $salary = DB::table('salaries')
                ->join('timesheets', 'salaries.mabangchamcong', '=', 'timesheets.id')
                ->join('employees', 'employees.id', '=', 'timesheets.manhanvien')
                ->join('contracts', 'contracts.id', '=', 'employees.mahopdong')
                ->selectRaw('salaries.id as id, employees.id as manhanvien,
             employees.hoten as hoten,timesheets.songaycong as songaycong,
             timesheets.sogiotangca as sogiolamthem,
             timesheets.songaycong*8*contracts.luongcoban  as luonghanhchinh,
             timesheets.sogiotangca*contracts.luongtangca as luonglamthem,
             contracts.phucap as phucap, contracts.BHXH as khautru,
             timesheets.songaycong*8*contracts.luongcoban + timesheets.sogiotangca*contracts.luongtangca + phucap - contracts.BHXH  as thuclinh ')
                ->get();
            //dd($salary);
            return view('quanlyluong.bangluong.index', compact('salary'));
        } else {
            $salary = DB::table('salaries')
                ->join('timesheets', 'salaries.mabangchamcong', '=', 'timesheets.id')
                ->join('employees', 'employees.id', '=', 'timesheets.manhanvien')
                ->join('contracts', 'contracts.id', '=', 'employees.mahopdong')
                ->selectRaw('salaries.id as id, employees.id as manhanvien,
             employees.hoten as hoten,timesheets.songaycong as songaycong,
             timesheets.sogiotangca as sogiolamthem,
             timesheets.songaycong*8*contracts.luongcoban  as luonghanhchinh,
             timesheets.sogiotangca*contracts.luongtangca as luonglamthem,
             contracts.phucap as phucap, contracts.BHXH as khautru,
             timesheets.songaycong*8*contracts.luongcoban + timesheets.sogiotangca*contracts.luongtangca + phucap - contracts.BHXH  as thuclinh ')
                ->where('employees.id', 'like', "%$search%")
                ->orwhere('employees.hoten', 'like', "%$search%")
                ->get();
            return view('quanlyluong.bangluong.index', compact('salary'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlyluong.bangluong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new salary();
        $salary->manhanvien = $request->manhanvien;
        $salary->mabangchamcong = $request->mabangchamcong;
        $salary->luonghanhchinh = $request->luonghanhchinh;
        $salary->luongtangca = $request->luongtangca;
        $salary->khautru = $request->khautru;
        $salary->thuclinh = $request->thuclinh;
        $salary->save();
        return Redirect::to('/salaryIndex');
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
        $salary = salary::find($id);
        return view('quanlyluong.bangluong.edit', compact('salary'));
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
        $salary = salary::find($id);
        $salary->luonghanhchinh = $request->luonghanhchinh;
        $salary->luongtangca = $request->luongtangca;
        $salary->khautru = $request->khautru;
        $salary->thuclinh = $request->thuclinh;
        $salary->save();
        return Redirect::to('/salaryIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = salary::find($id);
        $salary->delete();
        return Redirect::to('/salaryIndex');
    }
}
