@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-content-header">Staff Management System</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
                <div class="container">
                <div class="row card-row">
                    <div class="col-sm-4">
                        <a class="card-a" href="{{ route('home') }}">
                        <div class="card card-contain">
                            <div class="media">
  <div class="media-left">
    <i class="fa fa-users"></i>
  </div>
  <div class="media-body">
    <h5 class="media-heading">student management</h5>
    <p>this is all about manage the student and parents</p>
  </div>
</div>
                            
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="card-a" href="{{ route('home') }}">
                        <div class="card card-contain">
                            <div class="media">
  <div class="media-left">
    <img src="img_avatar1.png" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h5 class="media-heading">discipline management</h5>
    <p>this is all about manage the student and parents</p>
  </div>
</div>
                            
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a class="card-a" href="{{ route('staff.index') }}">
                        <div class="card card-contain">
                            <div class="media">
  <div class="media-left">
    <img src="img_avatar1.png" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h5 class="media-heading">staff management</h5>
    <p>this is all about manage the student and parents</p>
  </div>
</div>
                            
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
