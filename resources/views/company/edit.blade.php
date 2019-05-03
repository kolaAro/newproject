@extends('company.create')

@section('editId',$item->id)

@section('editname',$item->Name)
@section('editemail',$item->Email)
@section('editlogo',$item->Logo)
@section('editwebsite',$item->Website)

@section('editMethod')
      {{method_field('PUT')}}
@endsection
