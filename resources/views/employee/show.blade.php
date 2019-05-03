@extends('lay.app')

@section('body')
        <br>

           <div class="col-lg-offset-4 col-lg-4">
             <h1>{{$item->Firstname}}</h1>
             <h1>{{$item->Firstname}}</h1>
               <p>{{$item->Company}}</p>
              <p>{{$item->Email}}</p>
              <p>{{$item->Phone}}</p>
           </div>

@endsection
