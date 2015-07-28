@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="heading">{{ $user->first_name . ' ' . $user->last_name }}</h1>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4>{{ trans('content.location') }}</h4>
            <br />
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>{{ trans('content.name') }}</td>
                                <td><strong><i>{{ $user->camp->name  }}</i></strong></td>
                            </tr>
                            <tr>
                                <td>{{ trans('content.street') }}</td>
                                <td><strong><i>{{ $user->camp->street  }}</i></strong></td>
                            </tr>
                            <tr>
                                <td>{{ trans('content.zip') }} / {{ trans('content.city') }}</td>
                                <td><strong><i>{{ $user->camp->zip  }}</i></strong> <strong><i>{{ $user->camp->city  }}</i></strong></td>
                            </tr>
                            <tr>
                                <td>{{ trans('content.contact') }}</td>
                                <td><strong><i>{{ $user->camp->contact  }}</i></strong></td>
                            </tr>
                            <tr>
                                <td>{{ trans('content.phone') }}</td>
                                <td><strong><i>{{ $user->camp->phone  }}</i></strong></td>
                            </tr>
                            <tr>
                                <td>{{ trans('content.contact_email') }}</td>
                                <td>
                                    <a href="mailto: {{ $user->camp->contact_email  }}"><strong><i>{{ $user->camp->contact_email  }}</i></strong></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <a class="btn btn-lg btn-primary" href="{{ url('/' . Session::get('lang')) }}">{{ trans('content.back') }}</a>
        </div>
    </div>
@endsection