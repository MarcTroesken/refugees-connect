@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ trans('content.editHeading') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.flash')
            <form action="{{ url('users/' . Auth::user()->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                
                @include('users.partials.userForm', ['user' => Auth::user()])

                <button type="submit" class="btn btn-block btn-primary">{{ trans('content.save') }}</button>
            </form>
            <br />
            <hr/>
            <br />
            <h4>{{ trans('content.delete') }}</h4>
            <br />
            <form action="{{ route('users.destroy', Auth::user()->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-block btn-danger">{{ trans('content.delete') }}</button>
            </form>
        </div>
    </div>
    <br /><br /><br />
@endsection