<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\interviewDetail;
use Illuminate\Support\Facades\Redirect;

class InterviewDetailController extends Controller
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
            $interviewDetail = interviewDetail::all();
            //dd($interviewDetail );
           return view('quanlytuyendung.phongvan.index',compact('interviewDetail'));
        }
        else{
            $interviewDetail=interviewDetail::where('makehoach','like', "%$search%")
            ->orwhere('soluongcv','like', "%$search%")
            ->orwhere('soluongdat','like', "%$search%")
            ->orwhere('sovongpv','like', "%$search%")
            ->orwhere('ngayphongvan','like', "%$search%")
            ->orwhere('diadiem','like', "%$search%")
            ->get();
            return view('quanlytuyendung.phongvan.index',compact('interviewDetail'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlytuyendung.phongvan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interviewDetail = new interviewDetail();
        $interviewDetail->makehoach = $request->makehoach;
        $interviewDetail->soluongcv = $request->soluongcv;
        $interviewDetail->soluongdat = $request->soluongdat;
        $interviewDetail->sovongpv = $request->sovongpv;
        $interviewDetail->ngayphongvan = $request->ngayphongvan;
        $interviewDetail->diadiem = $request->diadiem;

        $interviewDetail->save();
        return Redirect::to('/interviewDetailIndex');
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
        $interviewDetail = interviewDetail::find($id);
        return view('quanlytuyendung.phongvan.edit', compact('interviewDetail'));
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
        $interviewDetail = interviewDetail::find($id);
        $interviewDetail->soluongcv = $request->soluongcv;
        $interviewDetail->soluongdat = $request->soluongdat;
        $interviewDetail->sovongpv = $request->sovongpv;
        $interviewDetail->ngayphongvan = $request->ngayphongvan;
        $interviewDetail->diadiem = $request->diadiem;

        $interviewDetail->save();
        return Redirect::to('/interviewDetailIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interviewDetail = interviewDetail::find($id);
        $interviewDetail->delete();
        return Redirect::to('/interviewDetailIndex');
    }
}