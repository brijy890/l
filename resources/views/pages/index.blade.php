@extends('layouts.app')

@section('header-image')
  <div class="h-image" style="background: url('{{ asset('images/image1.jpeg') }}') no-repeat center center;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p>Create your post and publish in blog!</p>
            <p>
              <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Login</a> <a class="btn btn-success btn-lg" href="/dashboard" role="button">Registration</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('content')

@endsection
      