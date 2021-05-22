<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\discipline;
use Illuminate\Support\Facades\Redirect;

class DisciplineController extends Controller
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
            $discipline = discipline::all();
            return view('quanlychedo.kyluat.index',compact('discipline'));
        }
        else{
            $discipline=discipline::where('id','like', "%$search%")
            ->orwhere('hinhthuckiluat','like', "%$search%")->get();
            return view('quanlychedo.kyluat.index',compact('discipline'));


        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlychedo.kyluat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $discipline = new discipline();
        $discipline->hinhthuckiluat = $request->hinhthuckiluat;
        $discipline->save();
        return Redirect::to('/disciplineIndex');
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
        $discipline = discipline::find($id);
        return view('quanlychedo.kyluat.edit', compact('discipline'));
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
        $discipline = discipline::find($id);
        $discipline->hinhthuckiluat = $request->hinhthuckiluat;
        $discipline->save();
        return Redirect::to('/disciplineIndex');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discipline = discipline::find($id);
        $discipline->delete();
        return Redirect::to('/disciplineIndex');
    }
}