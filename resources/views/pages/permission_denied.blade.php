@extends('layouts.app')
  @section('title', 'No Access')

@section('content')
  <div class="col-md-4 offset-md-4">
    <div class="card ">
      <div class="card-body">
        @if (Auth::check())
          <div class="alert alert-danger text-center mb-0">
            No Access
          </div>
        @else
          <div class="alert alert-danger text-center">
            Requre Sign in
          </div>

          <a class="btn btn-lg btn-primary btn-block" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            Sign In
          </a>
        @endif
      </div>
    </div>
  </div>
@stop
