@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Create New User</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif



<form class="form-horizontal" method="post" action="{{route('staff.store')}}">
    {{ csrf_field() }}
<div class="row">

    <div class="col-xs-12 col-sm-9 col-md-6">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" class="form-control" id="" name="name" required>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Email:</strong>

            <input type="text" class="form-control" id="" name="email" required>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Password:</strong>

            <input type="password" class="form-control" id="" name="password" required>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Confirm Password:</strong>
            <input type="password" class="form-control" id="" name="confirm-password" required>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Role:</strong>
            
            <select class="form-control" name="roles">
                @foreach ($roles as $role)
                <option value="{{$role->id}}">{{ $role->name }}</option>
                @endforeach
                
            </select>
            

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

</form>


@endsection