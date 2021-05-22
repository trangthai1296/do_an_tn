<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\relative;
use Illuminate\Support\Facades\Redirect;

class RelativeController extends Controller
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
            $relative = relative::all();
            return view('quanlynhanvien.nguoithan.index', compact('relative'));
        }
        else{
            $relative=relative::where('id','like', "%$search%")
            ->orwhere('moiquanhe','like', "%$search%")
            ->orwhere('hoten','like', "%$search%")
            ->orwhere('diachi','like', "%$search%")
            ->orwhere('sdt','like', "%$search%")
            ->get();
            return view('quanlynhanvien.nguoithan.index', compact('relative'));

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('quanlynhanvien.nguoithan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $relative = new relative();
        $relative->id = $request->id;
        $relative->moiquanhe = $request->moiquanhe;
        $relative->hoten = $request->hoten;
        $relative->diachi = $request->diachi;
        $relative->SDT = $request->SDT;
        $relative->save();
        return Redirect::to('/relativeIndex');
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
        $relative = relative::find($id);
        return view('quanlynhanvien.nguoithan.edit', compact('relative'));
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
        $relative = relative::find($id);
        $relative->moiquanhe = $request->moiquanhe;
        $relative->hoten = $request->hoten;
        $relative->diachi = $request->diachi;
        $relative->SDT = $request->SDT;
        $relative->save();
        return Redirect::to('/relativeIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $relative = relative::find($id);
        $relative->delete();
        return Redirect::to('/relativeIndex');
    }
}