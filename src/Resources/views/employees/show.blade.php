@extends('layouts.app')

@section('title', Lang::get('employees::employee.header_show'))

@section('content')
<card title="@lang('employees::employee.header_show')">

<div class="form-group row">
    <label for="anrede_id" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.anrede')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->getAnrede() }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.title')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->title }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="first_name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.first_name')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->first_name }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="last_name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.last_name')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->last_name }}</show-txt>
    </div>
</div>


<div class="form-group row">
    <label for="signature_rule_id" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.signature_rule')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->getSignatureRule() }}</show-txt>
    </div>
</div>


<div class="form-group row">
    <label for="street" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.street')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->street }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="postcode" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.postcode')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->postcode }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="city" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.city')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->city }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="phone" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->phone }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="phone2" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone2')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->phone2 }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="mobile" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.mobile')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->mobile }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->email }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="email_privat" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email_privat')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->email_privat }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="skype" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.skype')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->skype }}</show-txt>
    </div>
</div>


<div class="form-group row">
    <label for="projects" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.projects')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->projects }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="hourly_rate" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.hourly_rate')</label>
    <div class="col-md-6 mt-2">
        <show-euro>{{ $employee->hourly_rate }}</show-euro>
    </div>
</div>

<div class="form-group row">
    <label for="birthday" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.birthday')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->birthday }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="comment" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.comment')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->comment }}</show-txt>
    </div>
</div>


@role('admin|super')
<div class="form-group row">
    <label for="admin_comment" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.admin_comment')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->admin_comment }}</show-txt>
    </div>
</div>
@endrole


<div class="form-group row mb-2">
    <div class="col-md-4 text-right">
        <button-back route="{{ route('employees.index') }}">@Lang('master.btn-back')</button-back>
    </div>
    <div class="col-md-6 text-left">
        <button-edit route="{{ route('employees.edit', $employee->id) }}" >@lang('master.btn-edit')</button-save>
    </div>
</div>

</card>
@endsection
