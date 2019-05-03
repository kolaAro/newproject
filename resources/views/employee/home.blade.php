@extends('lay.app')

@section('body')

              <a href="employee/create" class="btn btn-primary" style="margin-top:56px;height:20%;">Add New</a>
    <div class="col-lg-6">
            <center><h1>EMPLOY List</h1></center>
                <ul class="list-group">
                    @foreach($employees as $employee)
                      <li class="list-group-item">
                           <a href="{{'/code/public/employee/'.$employee->id}}">{{$employee->Name }}</a>
                           <span class="pull-right">{{$employee->created_at->diffForHumans()}}</span>
                      </li>
                    @endforeach
                </ul>

              </div>

                  <div class="col-lg-2" style="margin-top:56px;">
                <ul class="list-group">
                  @foreach($employees as $employee)
                    <li class="list-group-item">
                        <a href="{{'/code/public/employee/'.$employee->id.'/edit'}}">Edit</a>

                            </li>
                  @endforeach
                </ul>
      </div>

      <div class="col-lg-2" style="margin-top:56px;">
    <ul class="list-group">
      @foreach($employees as $employee)
        <li class="list-group-item">
            <form style="border:none;" action="{{'/code/public/employee/'.$employee->id}}" method="post">
                 {{ csrf_field()}}
                  {{method_field('DELETE')}}
              <button type="submit" style="border:none;padding:none;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </form>
    </li>
      @endforeach
    </ul>

</div>


@endsection
