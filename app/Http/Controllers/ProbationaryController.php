<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\probationary;
use Illuminate\Support\Facades\Redirect;

class ProbationaryController extends Controller
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
            $probationary = probationary::all();
            return view('quanlytuyendung.thuviec.index',compact('probationary'));
        }
        else{
            $probationary=probationary::where('makehoach','like', "%$search%")
            ->orwhere('hoten','like', "%$search%")
            ->orwhere('ngaybatdau','like', "%$search%")
            ->orwhere('ngayketthuc','like', "%$search%")
            ->orwhere('ketqua','like', "%$search%")
            ->get();
            return view('quanlytuyendung.thuviec.index',compact('probationary'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlytuyendung.thuviec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $probationary = new probationary();
        $probationary->makehoach = $request->makehoach;
        $probationary->hoten = $request->hoten;
        $probationary->ngaybatdau = $request->ngaybatdau;
        $probationary->ngayketthuc = $request->ngayketthuc;
        $probationary->ketqua = $request->ketqua;
        $probationary->save();
        return Redirect::to('/probationaryIndex');
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
        $probationary = probationary::find($id);
        return view('quanlytuyendung.thuviec.edit',compact('probationary'));
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
        $probationary = probationary::find($id);
        $probationary->hoten = $request->hoten;
        $probationary->ngaybatdau = $request->ngaybatdau;
        $probationary->ngayketthuc = $request->ngayketthuc;
        $probationary->ketqua = $request->ketqua;
        $probationary->save();
        return Redirect::to('/probationaryIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $probationary = probationary::find($id);
        $probationary->delete();
        return Redirect::to('/probationaryIndex');
    }
}