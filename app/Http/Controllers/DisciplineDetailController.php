<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\disciplineDetail;
use Illuminate\Support\Facades\Redirect;

class DisciplineDetailController extends Controller
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
            $disciplineDetail = disciplineDetail::all();
        return view('thongkebaocao.chitietkyluat.index', compact('disciplineDetail'));
        }
        else{
            $disciplineDetail=disciplineDetail::where('manhanvien','like', "%$search%")
            ->orwhere('lydo','like', "%$search%")->get();
            return view('thongkebaocao.chitietkyluat.index', compact('disciplineDetail'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thongkebaocao.chitietkyluat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $disciplineDetail = new disciplineDetail();
        $disciplineDetail->id = $request->id;
        $disciplineDetail->manhanvien = $request->manhanvien;
        $disciplineDetail->lydo = $request->lydo;
        $disciplineDetail->save();
        return Redirect::to('/disciplineDetailIndex');
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
        $disciplineDetail = disciplineDetail::find($id);
        return view('thongkebaocao.chitietkyluat.edit',compact('disciplineDetail'));
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
        $disciplineDetail = disciplineDetail::find($id);
        $disciplineDetail->manhanvien = $request->manhanvien;
        $disciplineDetail->lydo = $request->lydo;
        $disciplineDetail->save();
        return Redirect::to('/disciplineDetailIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplineDetail = disciplineDetail::find($id);
        $disciplineDetail->delete();
        return Redirect::to('/disciplineDetailIndex');
    }
}