@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ trans('content.resultHeading') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @unless($users->count() > 0)
                <p class="lead text-center">{{ trans('content.noResult') }}</p>
                <div class="text-center">
                    <a class="btn btn-lg btn-primary" href="{{ url('/' . Session::get('lang')) }}">{{ trans('content.back') }}</a>
                </div>
            @endunless
            @foreach($users->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $user)
                        <div class="col-md-3">
                            <a href="{{ url('users/' . $user->id . '/' . Session::get('lang')) }}">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h4>{{ $user->first_name  . ' ' . $user->last_name}}</h4>
                                        <p class="text-muted">{{ $user->camp->city }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection