<!-- Wird zur Zeit nicht verwendet, da der Employee beim erstellen des Users mit erstellt wird. -->
@extends('customers::layouts.master')

@section('title', Lang::get('customers::customer.header_create'))

@section('content')
<card title="@lang('customers::customer.header_create')">
<div>
    @include('include.message')
    <hform action="{{ route('customer.store') }}">

<div class="form-group row mb-2">
    <label for="address_id" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.address_id')</label>
    <div class="col-md-6">
        <combobox name="address_id" value="{{ old('address_id', 1) }}" :options="{{ $customer->getNameAddressCB() }}"></combobox>
    </div>
</div>

<div class="form-group row mb-2">
    <label for="titel" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.titel')</label>
    <div class="col-md-6">
       <input-text name="titel" value="{{ old('titel', $customer->titel) }}" />
    </div>
</div>


<div class="form-group row mb-2">
    <label for="first_name" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.first_name')</label>
    <div class="col-md-6">
       <input-text name="first_name" value="{{ old('first_name', $customer->first_name) }}" />
    </div>
</div>


<div class="form-group row mb-2">
    <label for="last_name" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.last_name')</label>
    <div class="col-md-6">
       <input-text name="last_name" value="{{ old('last_name', $customer->last_name) }}" />
    </div>
</div>


<div class="form-group row mb-2">
    <label for="street" class="col-md-4 col-form-label text-md-right">@lang('customer::customer.street')</label>
    <div class="col-md-6">
       <input-text name="street" value="{{ old('street', $customer->street) }}" />
    </div>
</div>


<div class="form-group row mb-2">
    <label for="postcode" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.postcode')</label>
    <div class="col-md-6">
       <input-text name="postcode" value="{{ old('postcode', $customer->postcode) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="city" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.city')</label>
    <div class="col-md-6">
       <input-text name="city" value="{{ old('city', $customer->city) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <label for="country" class="col-md-4 col-form-label text-md-right">@lang('customers::customer.country')</label>
    <div class="col-md-6">
       <input-text name="country" value="{{ old('country', $customer->country) }}" />
    </div>
</div>

<div class="form-group row mb-2">
    <div class="col-md-4 text-right">{{ HButton::back(route('useradmin.index')) }}</div>
    <div class="col-md-6 text-left">{{ HButton::submit() }}</div>
</div>


    </hform>
</card>
@endsection
