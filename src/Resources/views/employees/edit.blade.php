@extends('layouts.app')

@section('title', Lang::get('employees::employee.header_edit'))


@section('content')
<card title="@lang('employees::employee.header_edit')">
@include('include.message')

<hform action="{{ route('employees.update', $employee->id) }}">


<div class="form-group row mb-2">
    <label for="anrede_id" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.anrede')</label>
    <div class="col-md-6">
        <combobox name="anrede_id" :options="{{ $employee->getAnredeCB() }}" value="{{ old('anrede_id', $employee->anrede_ID) }}"></combobox>
    </div>
</div>


<div class="form-group row mb-2">
    <label for="title" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.title')</label>
    <div class="col-md-6">
        <input-text name="title" value="{{ old('title', $employee->title) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="first_name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.first_name')</label>
    <div class="col-md-6">
        <input-text name="first_name" value="{{ old('vorname', $employee->first_name) }}" />
    </div>
</div>


<div class="form-group row mb-2">
    <label for="last_name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.last_name')</label>
    <div class="col-md-6">
        <input-text name="last_name" value="{{ old('last_name', $employee->last_name) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="signature_rule_id" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.signature_rule')</label>
    <div class="col-md-6">
        <combobox name="signature_rule_id" :options="{{ $employee->getSignatureRuleCB() }}" value="{{ old('signature_rule_id', $employee->signature_rule_id) }}"></combobox>
    </div>
</div>

<div class="form-group row mb-2">
    <label for="street" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.street')</label>
    <div class="col-md-6">
        <input-text name="street" value="{{ old('street', $employee->street) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="postcode" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.postcode')</label>
    <div class="col-md-6">
        <input-text name="postcode" value="{{ old('postcode', $employee->postcode) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="city" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.city')</label>
    <div class="col-md-6">
        <input-text name="city" value="{{ old('city', $employee->city) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="phone" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone')</label>
    <div class="col-md-6">
        <input-text name="phone" value="{{ old('phone', $employee->phone) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="phone2" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone2')</label>
    <div class="col-md-6">
        <input-text name="phone2" value="{{ old('phone2', $employee->phone2) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="mobile" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.mobile')</label>
    <div class="col-md-6">
        <input-text name="mobile" value="{{ old('mobile', $employee->mobile) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email')</label>
    <div class="col-md-6">
        <input-text name="email" value="{{ old('email', $employee->email) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="private_email" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email_privat')</label>
    <div class="col-md-6">
        <input-text name="private_email" value="{{ old('private_email', $employee->private_email) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="skype" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.skype')</label>
    <div class="col-md-6">
        <input-text name="skype" value="{{ old('skype', $employee->skype) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="projects" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.projects')</label>
    <div class="col-md-6">
        <input-text name="projects" value="{{ old('projects', $employee->projects) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="hourly_rate" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.hourly_rate')</label>
    <div class="col-md-6">
        <input-euro name="hourly_rate" value="{{ old('hourly_rate', $employee->hourly_rate) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="birthday" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.birthday')</label>
    <div class="col-md-6">
        <input-date name="birthday" value="{{ old('birthday', $employee->birthday) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="comment" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.comment')</label>
    <div class="col-md-6">
        <text-area name="comment">{{ old('comment', $employee->comment) }}</textarea>
    </div>
</div>


@role('admin|super')
<div class="form-group row mb-2">
    <label for="admin_comment" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.admin_comment')</label>
    <div class="col-md-6">
        <text-area name="admin_comment">{{ old('admin_comment', $employee->admin_comment) }}</textarea>
    </div>
</div>
@endrole

<div class="form-group row mb-2">
    <div class="col-md-4 text-right">
        <button-back route="{{ route('employees.index') }}">@Lang('master.btn-back')</button-back>
    </div>
    <div class="col-md-6 text-left">
        <button-save>@lang('master.btn-save')</button-save>
    </div>
</div>




</hform>
</card>
@endsection
