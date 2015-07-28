<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">{{ trans('content.first_name') }}</label>
            <input type="text" name="first_name" class="form-control input-sm" placeholder="{{ trans('content.first_name') }}" value="{{ isset($user) ? $user->first_name : old('first_name') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="last_name">{{ trans('content.last_name') }}</label>
            <input type="text" name="last_name" class="form-control input-sm" placeholder="{{ trans('content.last_name') }}" value="{{ isset($user) ? $user->last_name : old('last_name') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="email">{{ trans('content.email') }}</label>
            <input type="text" name="email" class="form-control input-sm" placeholder="{{ trans('content.email') }}" value="{{ isset($user) ? $user->email : old('email') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">{{ trans('content.password') }}</label>
            <input type="password" name="password" class="form-control input-sm" placeholder="{{ trans('content.password') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password_confirmation">{{ trans('content.password_confirmation') }}</label>
            <input type="password" name="password_confirmation" class="form-control input-sm" placeholder="{{ trans('content.password_confirmation') }}">
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="camp[name]">{{ trans('content.name') }}</label>
            <input type="text" name="camp[name]" class="form-control input-sm" placeholder="{{ trans('content.name') }}" value="{{ isset($user) ? $user->camp->name : old('camp[name]') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="camp[street]">{{ trans('content.street') }}</label>
            <input type="text" name="camp[street]" class="form-control input-sm" placeholder="{{ trans('content.street') }}" value="{{ isset($user) ? $user->camp->street : old('camp[street]') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="camp[zip]">{{ trans('content.zip') }}</label>
            <input type="text" name="camp[zip]" class="form-control input-sm" placeholder="{{ trans('content.zip') }}" value="{{ isset($user) ? $user->camp->zip : old('camp[zip]') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="camp[city]">{{ trans('content.city') }}</label>
            <input type="text" name="camp[city]" class="form-control input-sm" placeholder="{{ trans('content.city') }}" value="{{ isset($user) ? $user->camp->city : old('camp[city]') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="camp[contact]">{{ trans('content.contact') }}</label>
            <input type="text" name="camp[contact]" class="form-control input-sm" placeholder="{{ trans('content.contact') }}" value="{{ isset($user) ? $user->camp->contact : old('camp[contact]') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="camp[phone]">{{ trans('content.phone') }}</label>
            <input type="text" name="camp[phone]" class="form-control input-sm" placeholder="{{ trans('content.phone') }}" value="{{ isset($user) ? $user->camp->phone : old('camp[phone]') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="camp[contact_email]">{{ trans('content.contact_email') }}</label>
            <input type="text" name="camp[contact_email]" class="form-control input-sm" placeholder="{{ trans('content.contact_email') }}" value="{{ isset($user) ? $user->camp->contact_email : old('camp[contact_email]') }}">
        </div>
    </div>
</div>