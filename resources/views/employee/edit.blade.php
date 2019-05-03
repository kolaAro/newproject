@extends('employee.create')

@section('editId',$item->id)

@section('editfirstname',$item->Firstname)
@section('editlastname',$item->Lastname)
@section('editcompany',$item->Company)
@section('editemail',$item->Email)
@section('editphone',$item->Phone)


@section('editMethod')
      {{method_field('PUT')}}
@endsection
