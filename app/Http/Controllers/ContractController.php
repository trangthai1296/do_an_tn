<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contract;
use Illuminate\Support\Facades\Redirect;

class ContractController extends Controller
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
        $contract = contract::all();
        return view('quanlychedo.hopdong.index', compact('contract'));
        }
        else{
            $contract = contract::where('id','like', "%$search%")
            ->orwhere('luongcoban','like', "%$search%")
            ->orwhere('luongtangca','like', "%$search%")
            ->orwhere('BHXH','like', "%$search%")
            ->orwhere('phucap','like', "%$search%")
            ->orwhere('thaisan','like', "%$search%")
            ->orwhere('thoihanhopdong','like', "%$search%")->get();
            return view('quanlychedo.hopdong.index', compact('contract'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('quanlychedo.hopdong.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract=new contract();
        $contract->luongcoban = $request->luongcoban;
        $contract->luongtangca = $request->luongtangca;
        $contract->BHYT = $request->BHYT;
        $contract->BHXH = $request->BHXH;
        $contract->phucap = $request->phucap;
        $contract->thaisan = $request->thaisan;
        $contract->thoihanhopdong = $request->thoihanhopdong;

        $contract->save();
        return Redirect::to('/contractIndex');
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
        $contract = contract::find($id);
        return view('quanlychedo.hopdong.edit', compact('contract'));
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
        $contract = contract::find($id);
        $contract->luongcoban = $request->luongcoban;
        $contract->luongtangca = $request->luongtangca;
        $contract->BHYT = $request->BHYT;
        $contract->BHXH = $request->BHXH;
        $contract->phucap = $request->phucap;
        $contract->thaisan = $request->thaisan;
        $contract->thoihanhopdong = $request->thoihanhopdong;

        $contract->save();
        return Redirect::to('/contractIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = contract::find($id);
        $contract->delete();
        return Redirect::to('/contractIndex');
    }
}