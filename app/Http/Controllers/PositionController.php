<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\position;
use Illuminate\Support\Facades\Redirect;

class PositionController extends Controller
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
            $position = position::all();
            return view('quanlynhanvien.chucvu.index',compact('position'));
        }
        else{
            $position=position::where('id','like', "%$search%")
            ->orwhere('tenchucvu','like', "%$search%")->get();
            return view('quanlynhanvien.chucvu.index',compact('position'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlynhanvien.chucvu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $position = new position();
        $position->id = $request->id;
        $position->tenchucvu = $request->tenchucvu;
        $position->save();
        return Redirect::to('/positionIndex');
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
        $position = position::find($id);
        return view('quanlynhanvien.chucvu.edit', compact('position'));
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
        $position = position::find($id);
        $position->tenchucvu = $request->tenchucvu;
        $position->save();
        return Redirect::to('/positionIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = position::find($id);
        $position->delete();
        return Redirect::to('/positionIndex');
    }
}