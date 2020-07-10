@extends('layouts.app')

@section('title', Lang::get('employees::employee.profil_show'))

@section('content')
<card title="@lang('employees::employee.profil_show')">

@include('include.message')

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.anrede')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->getAnrede() }}</show-txt>
    </div>
</div>



<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.title')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->title }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.first_name')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->first_name }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.last_name')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->last_name }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.signature_rule')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->getSignatureRule() }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.street')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->street }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.postcode')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->postcode }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.city')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->city }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->phone }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.phone2')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->phone2 }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.mobile')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->mobile }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->email }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.email_privat')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->email_privat }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.projects')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->projects }}</show-txt>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.birthday')</label>
    <div class="col-md-6 mt-2">
        <show-datum value="{{ $employee->birthday }}" ></show-datum>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('employees::employee.comment')</label>
    <div class="col-md-6 mt-2">
        <show-txt>{{ $employee->comment }}</show-txt>
    </div>
</div>

<div class="form-group row mb-2">
    <div class="col-md-4 text-right">
        <button-back route="{{ route('root') }}">@Lang('master.btn-back')</button-back>
    </div>
    <div class="col-md-6 text-left">
        <button-edit route="{{ route('profil.edit') }}" >@lang('master.btn-edit')</button-save>
    </div>
</div>

</card>

@endsection

@section('bodyend')
@endsection
