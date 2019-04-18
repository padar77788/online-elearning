<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Catagory;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $catagoris=Catagory::all();
           return view ('admin.pages.catagory.managecatagory',['catagoris'=>$catagoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('admin.pages.catagory.addcatagory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validation($request);
          $data=$request->all();
          $catagory=new Catagory();
          $catagory->title=$data['title'];
          $catagory->save();
           session()->flash('message','Catagory Added Successfully ');
           return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                 $catagory=Catagory::find($id);
                 return view ('admin.pages.catagory.viewcatagory',['catagory'=>$catagory]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                 $catagory=Catagory::find($id);
                 return view('admin.pages.catagory.updatecatagory',['catagory'=>$catagory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

                $catagory=Catagory::find($request->id);
                $catagory->update($request->all());
                return  redirect()->route('manage-catagory')->with('message','Catagory Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                   $catagory=Catagory::find($id);
                   $catagory->delete();
                   return  redirect()->route('manage-catagory')->with('message','Catagory Delete Successfully');

    }
    public function validation($request){
                  $request->validate([
                    'title'=>'required'
                  ]);
    }
}
