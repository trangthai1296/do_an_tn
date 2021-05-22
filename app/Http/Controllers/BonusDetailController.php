<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bonusDetail;
use Illuminate\Support\Facades\Redirect;

class BonusDetailController extends Controller
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
            $bonusDetail = bonusDetail::all();
            // dd($bonusDetail);
             return view('thongkebaocao.chitietkhenthuong.index', compact('bonusDetail'));
        }
        else{
            $bonusDetail = bonusDetail::where('manhanvien','like', "%$search%")
            ->orwhere('lydo','like', "%$search%")->get();
            return view('thongkebaocao.chitietkhenthuong.index', compact('bonusDetail'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thongkebaocao.chitietkhenthuong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bonusDetail = new bonusDetail();
        $bonusDetail->id = $request->id;
        $bonusDetail->manhanvien = $request->manhanvien;
        $bonusDetail->lydo = $request->lydo;
        $bonusDetail->save();
        return Redirect::to('/bonusDetailIndex');
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
        $bonusDetail = bonusdetail::find($id);
        return view('thongkebaocao.chitietkhenthuong.edit', compact('bonusDetail'));
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
        $bonusDetail = bonusdetail::find($id);
        $bonusDetail->manhanvien = $request->manhanvien;
        $bonusDetail->lydo = $request->lydo;
        $bonusDetail->save();
        return Redirect::to('/bonusDetailIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bonusDetail = bonusdetail::find($id);
        $bonusDetail->delete();
        return Redirect::to('/bonusDetailIndex');
    }
}