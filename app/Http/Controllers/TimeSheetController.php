<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\timesheet;
use Illuminate\Support\Facades\Redirect;

class TimeSheetController extends Controller
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
            $timesheet = timesheet::all();
            return view ('quanlyluong.bangchamcong.index', compact('timesheet'));
        }
        else{
            $timesheet=timesheet::where('manhanvien','like', "%$search%")
            ->orwhere('songaycong','like', "%$search%")
            ->orwhere('sogiotangca','like', "%$search%")
            ->get();
            return view ('quanlyluong.bangchamcong.index', compact('timesheet'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('quanlyluong.bangchamcong.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timesheet = new timesheet();
        $timesheet->manhanvien = $request->manhanvien;
        $timesheet->songaycong = $request->songaycong;
        $timesheet->sogiotangca = $request->sogiotangca;
        $timesheet->save();
        return Redirect::to('/timesheetIndex');
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
        $timesheet = timesheet::find($id);
        return view ('quanlyluong.bangchamcong.edit', compact('timesheet'));
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
        $timesheet = timesheet::find($id);
        $timesheet->manhanvien = $request->manhanvien;
        $timesheet->songaycong = $request->songaycong;
        $timesheet->sogiotangca = $request->sogiotangca;
        $timesheet->save();
        return Redirect::to('/timesheetIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timesheet = timesheet::find($id);
        $timesheet->delete();
        return Redirect::to('/timesheetIndex');
    }
}