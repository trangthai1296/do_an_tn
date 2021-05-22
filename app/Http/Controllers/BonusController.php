<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bonus;
use Illuminate\Support\Facades\Redirect;

class BonusController extends Controller
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
            $bonus = bonus::all();
            return view('quanlychedo.khenthuong.index',compact('bonus'));
        }
        else{
            $bonus = bonus::where('hinhthuckhenthuong','like', "%$search%")->get();
            return view('quanlychedo.khenthuong.index',compact('bonus'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlychedo.khenthuong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bonus = new bonus();
        $bonus->hinhthuckhenthuong = $request->hinhthuckhenthuong;
        $bonus->save();
        return Redirect::to('/bonusIndex');
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
        $bonus = bonus::find($id);
        return view('quanlychedo.khenthuong.edit', compact('bonus'));
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
        $bonus = bonus::find($id);
        $bonus->hinhthuckhenthuong = $request->hinhthuckhenthuong;
        $bonus->save();
        return Redirect::to('/bonusIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bonus = bonus::find($id);
        $bonus->delete();
        return Redirect::to('/bonusIndex');
    }
}