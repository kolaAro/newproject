@extends('lay.app')

@section('body')

              <a href="company/create" class="btn btn-primary" style="margin-top:56px;height:20%;">Add New</a>
    <div class="col-lg-6">
            <center><h1>COMPANY List</h1></center>
                <ul class="list-group">
                    @foreach($companies as $company)
                      <li class="list-group-item">
                           <a href="{{'/code/public/company/'.$company->id}}">{{$company->Name }}</a>
                           <span class="pull-right">{{$company->created_at->diffForHumans()}}</span>
                      </li>
                    @endforeach
                </ul>

              </div>

                
</div>


@endsection
