<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planeRecruitment;
use Illuminate\Support\Facades\Redirect;

class PlaneRecruitmentController extends Controller
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
            $planeRecruitment = planeRecruitment::all();
            return view('quanlytuyendung.kehoach.index',compact('planeRecruitment'));
        }
        else{
            $planeRecruitment=planeRecruitment::where('id','like', "%$search%")
            ->orwhere('machucvu','like', "%$search%")
            ->orwhere('soluong','like', "%$search%")
            ->orwhere('mota','like', "%$search%")
            ->orwhere('ngaynaphoso','like', "%$search%")
            ->orwhere('ngayhethan','like', "%$search%")->get();
            return view('quanlytuyendung.kehoach.index',compact('planeRecruitment'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quanlytuyendung.kehoach.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planeRecruitment = new planeRecruitment();
        $planeRecruitment->machucvu = $request->machucvu;
        $planeRecruitment->mota = $request->mota;
        $planeRecruitment->soluong = $request->soluong;
        $planeRecruitment->ngaynaphoso = $request->ngaynaphoso;
        $planeRecruitment->ngayhethan = $request->ngayhethan;
        $planeRecruitment->save();
        return Redirect::to('/planeRecruitmentIndex');
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
        $planeRecruitment = planeRecruitment::find($id);
        return view('quanlytuyendung.kehoach.edit', compact('planeRecruitment'));
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
        $planeRecruitment = planeRecruitment::find($id);
        $planeRecruitment->machucvu = $request->machucvu;
        $planeRecruitment->mota = $request->mota;
        $planeRecruitment->soluong = $request->soluong;
        $planeRecruitment->ngaynaphoso = $request->ngaynaphoso;
        $planeRecruitment->ngayhethan = $request->ngayhethan;
        $planeRecruitment->save();
        return Redirect::to('/planeRecruitmentIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planeRecruitment = planeRecruitment::find($id);
        $planeRecruitment->delete();
        return Redirect::to('/planeRecruitmentIndex');
    }
}