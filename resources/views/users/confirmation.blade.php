@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ trans('content.confirmationHeading') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p class="lead">{{ trans('content.confirmation') }}</p>
            <a class="btn btn-primary" href="{{ url('users/' . Auth::user()->id . '/edit/' . Session::get('lang')) }}">{{ trans('content.editProfile') }}</a>
            <a class="btn btn-primary" href="{{ url('/' . Session::get('lang')) }}">{{ trans('content.search') }}</a>
        </div>
    </div>
@endsection