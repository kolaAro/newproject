@extends('lay.app')

@section('body')
        <br>

           <div class="col-lg-offset-4 col-lg-4">
             <h1>{{$item->Name}}</h1>
              <p>{{$item->Email}}</p>
              <p>{{$item->Logo}}</p>
              <p>{{$item->Website}}</p>
           </div>

@endsection
