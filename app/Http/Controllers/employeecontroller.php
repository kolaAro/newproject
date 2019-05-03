<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employees=Employee::all();
      return view('employee.home',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $employee= new employee;
      $this->validate($request,[
                'firstname'=>'required',
                'lastname'=>'required',
                'company'=>'required',
                'email'=>'required',
                'phone'=>'required|numeric'

      ]);
      $employee->firstname=$request->firstname;
      $employee->lastname=$request->lastname;
      $employee->company=$request->company;
      $employee->email=$request->email;
      $employee->phone=$request->phone;
      $employee->save();
      return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item=Employee::find($id);
        return view('employee.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $item=Employee::find($id);
      return view('employee.edit',compact('item'));
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
        $employee= Employee::find($id);
        $this->validate($request,[
                  'firstname'=>'required',
                  'lastname'=>'required',
                  'company'=>'required',
                  'email'=>'required',
                  'phone'=>'required|numeric'

        ]);
        $employee->firstname=$request->firstname;
          $employee->lastname=$request->lastname;
          $employee->company=$request->company;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->save();
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $item=Employee::find($id);
      $item->delete();
      return redirect('employee');
    }
}
