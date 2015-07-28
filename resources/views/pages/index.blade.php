@extends('layout')

@section('content')
    <div class="row">
        <div id="search-index" class="col-md-8 col-md-offset-2 text-center">
            <img class="brand-big" src="{{ asset('images/Logo.png') }}" alt="Logo Refugees Connect">
            <form id="searchForm" action="{{ url('/search/' . Session::get('lang')) }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="text" 
                            id="string"
                            name="string" 
                            class="form-control input-lg" 
                            v-model="string">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">{{ trans('content.search') }}</button>

                @if( ! Auth::check())
                    <a href="{{ url('/auth/register/' . Session::get('lang')) }}" class="btn btn-lg btn-primary">{{ trans('content.register') }}</a>
                @else
                    <a href="{{ url('users/' . Auth::user()->id . '/edit/' . Session::get('lang')) }}" class="btn btn-lg btn-primary">{{ trans('content.editProfile') }}</a>
                @endif
            </form>
        </div>
    </div>
    <br /><br />
    @if (Session::has('success'))
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
@endsection