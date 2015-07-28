@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ trans('content.loginHeading') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="/auth/login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="password">{{ trans('content.email') }}</label>
                    <input type="text" name="email" class="form-control input-sm" placeholder="{{ trans('content.email') }}" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">{{ trans('content.password') }}</label>
                    <input type="password" name="password" class="form-control input-sm" placeholder="{{ trans('content.password') }}" value="{{ old('password') }}">
                </div>

                <button type="submit" class="btn btn-block btn-primary">{{ trans('content.login') }}</button>
                <br />
                <div class="text-center">
                    <a href="{{ url('auth/register/' . Session::get('lang')) }}">{{ trans('content.register') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection