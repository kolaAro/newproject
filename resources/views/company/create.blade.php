@extends('lay.app')

@section('body')
         <br>
         <br>

         <div class="col-lg-4 col-lg-offset-4">
           <br>
              <a href="/code/public/company" class="btn btn-info">Back</a>
               <h1>{{substr(Route::currentRouteName(),8)}} company</h1>
               <form class="form-horizontal" action="/code/public/company" method="post">
                 {{ csrf_field()}}
                 @section('editMethod')
                 @show

               <div class="form-group">
                  <input type="text" class="form-control" name="name" value="@yield('editname')" placeholder="name"></input>
                  <br>
                  <input type="text" class="form-control" name="email" value="@yield('editemail')" placeholder="email"></input>
                  <br>
                  <input type="text" class="form-control" name="logo" value="@yield('editlogo')" placeholder="logo"></input>
                  <br>
                 <textarea name="website" rows="8" class="form-control" placeholder="website">@yield('editwebsite')</textarea>
                 <br>
                 <button class="btn btn-success">Submit</button>
                 </div>
               </form>


                 @if(count($errors)>0)
                 <div class="alert alert-danger">
                 @foreach($errors->all() as $error)
                 {{$error}}
                 @endforeach
                 <div>
                 @endif


           </div>
         </div>


@endsection
