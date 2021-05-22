<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quit;
use Illuminate\Support\Facades\Redirect;

class QuitController extends Controller
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
            $quit = quit::all();
            return view('thongkebaocao.nghiviec.index',compact('quit'));
        }
        else{
            $quit=quit::where('manhanvien','like', "%$search%")
            ->orwhere('lydo','like', "%$search%")
            ->orwhere('tinhtrang','like', "%$search%")
            ->orwhere('ngaynghi','like', "%$search%")
            ->get();
            return view('thongkebaocao.nghiviec.index',compact('quit'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('thongkebaocao.nghiviec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quit = new quit();
        $quit->manhanvien = $request->manhanvien;
        $quit->lydo = $request->lydo;
        $quit->tinhtrang = $request->tinhtrang;
        $quit->ngaynghi = $request->ngaynghi;
        $quit->save();
        return Redirect::to('/quitIndex');
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
        $quit = quit::find($id);
        //dd($quit);
        return view ('thongkebaocao.nghiviec.edit', compact('quit'));
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
        $quit = quit::find($id);
        $quit->lydo = $request->lydo;
        $quit->tinhtrang = $request->tinhtrang;
        $quit->ngaynghi = $request->ngaynghi;
        $quit->save();
        return Redirect::to('/quitIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quit = quit::find($id);
        $quit->delete();
        return Redirect::to('/quitIndex');
    }
}