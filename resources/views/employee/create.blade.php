@extends('lay.app')

@section('body')
         <br>
         <br>

         <div class="col-lg-4 col-lg-offset-4">
           <br>
              <a href="/code/public/employee" class="btn btn-info">Back</a>
               <h1>{{substr(Route::currentRouteName(),9)}} employee</h1>
               <form class="form-horizontal" action="/code/public/employee" method="post">
                 {{ csrf_field()}}
                 @section('editMethod')
                 @show

               <div class="form-group">
                  <input type="text" class="form-control" name="firstname" value="@yield('editname')" placeholder="name"></input>
                  <br>
                  <input type="text" class="form-control" name="lastname" value="@yield('editemail')" placeholder="email"></input>
                  <br>
                  <input type="text" class="form-control" name="company" value="@yield('editcompany')" placeholder="company"></input>
                  <br>
                  <input type="text" class="form-control" name="email" value="@yield('editemail')" placeholder="email"></input>
                  <br>
                  <input type="text" class="form-control" name="phone" value="@yield('editphone')" placeholder="phone"></input>
                  <br>

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
