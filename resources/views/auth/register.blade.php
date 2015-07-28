@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ trans('content.registerHeading') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.flash')
            @include('partials.hint')
            <form action="/auth/register" method="POST">
                {{ csrf_field() }}
                
                @include('users.partials.userForm')

                <button type="submit" class="btn btn-block btn-primary">{{ trans('content.submit') }}</button>
            </form>
        </div>
    </div>
    <br /><br /><br />
@endsection