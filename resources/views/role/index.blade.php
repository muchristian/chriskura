@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Role Management</h2>

        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('role.create') }}"> Create New Role</a>
            <a href="{{ route('staff.index') }}" class="btn btn-primary">to staff</a>

        </div>

    </div>

</div>


@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif


<table class="table table-bordered">

  <tr>

     <th>Name</th>

  </tr>

    @foreach ($roles as $key => $role)

    <tr>

        <td>{{ $role->name }}</td>
        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>

    </tr>

    @endforeach
</table>



@endsection

