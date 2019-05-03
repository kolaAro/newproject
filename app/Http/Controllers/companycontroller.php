<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class companycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $companies=Company::all();
      return view('company.home',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $company= new company;
      $this->validate($request,[
                'name'=>'required',
                'email'=>'required|unique:companies',
                'logo'=>'required',
                'website'=>'required'
      ]);
      $company->name=$request->name;
      $company->email=$request->email;
      $company->logo=$request->logo;
      $company->website=$request->website;
      $company->save();
      return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Company::find($id);
        return view('company.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $item=Company::find($id);
      return view('company.edit',compact('item'));
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
        $company= Company::find($id);
        $this->validate($request,[
                  'name'=>'required',
                  'email'=>'required',
                  'logo'=>'required',
                  'website'=>'required'
        ]);
        $company->name=$request->name;
        $company->email=$request->email;
        $company->logo=$request->logo;
        $company->website=$request->website;
        $company->save();
        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item=Company::find($id);
      $item->delete();
      return redirect('company');
    }
}
