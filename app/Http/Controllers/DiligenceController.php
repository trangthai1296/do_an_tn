<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diligence;
use Illuminate\Support\Facades\Redirect;

class DiligenceController extends Controller
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
            $diligence = diligence::all();
            return view('thongkebaocao.chuyencan.index',compact('diligence'));
        }
        else{
            $diligence=diligence::where('manhanvien','like', "%$search%")
            ->orwhere('nghicophep','like', "%$search%")
            ->orwhere('nghikhongphep','like', "%$search%")->get();
            return view('thongkebaocao.chuyencan.index',compact('diligence'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('thongkebaocao.chuyencan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diligence = new diligence();
        $diligence->manhanvien=$request->nghicophep;
        $diligence->nghicophep= $request->nghicophep;
        $diligence->nghikhongphep= $request->nghikhongphep;
        $diligence->save();
        return Redirect::to('/diligenceIndex');
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
        $diligence = diligence::find($id);
        return view ('thongkebaocao.chuyencan.edit',compact('diligence'));
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
        $diligence = diligence::find($id);
        $diligence->nghicophep=$request->nghicophep;
        $diligence->nghikhongphep= $request->nghikhongphep;
        $diligence->save();
        return Redirect::to('/diligenceIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diligence =  diligence::find($id);
        $diligence->delete();
        return Redirect::to('/diligenceIndex');
    }
}