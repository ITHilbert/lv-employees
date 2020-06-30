@extends('master')

@section('content')

{{ Card::open('Profil') }}
@include('laravelKit.message')

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Anrede</label>
    <div class="col-md-6 mt-2">
        {{ $employe->getAnrede() }}
    </div>
</div>



<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Titel</label>
    <div class="col-md-6 mt-2">
        {{ $employe->titel }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Vorname</label>
    <div class="col-md-6 mt-2">
        {{ $employe->vorname }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nachname</label>
    <div class="col-md-6 mt-2">
        {{ $employe->nachname }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Sigantur Recht</label>
    <div class="col-md-6 mt-2">
        {{ $employe->getSignatureRule() }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Strasse</label>
    <div class="col-md-6 mt-2">
        {{ $employe->strasse }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">PLZ</label>
    <div class="col-md-6 mt-2">
        {{ $employe->plz }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Ort</label>
    <div class="col-md-6 mt-2">
        {{ $employe->ort }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Telefon</label>
    <div class="col-md-6 mt-2">
        {{ $employe->telefon }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Telefon 2</label>
    <div class="col-md-6 mt-2">
        {{ $employe->telefon2 }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Mobil</label>
    <div class="col-md-6 mt-2">
        {{ $employe->mobil }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">E-Mail</label>
    <div class="col-md-6 mt-2">
        {{ $employe->email }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">E-Mail Privat</label>
    <div class="col-md-6 mt-2">
        {{ $employe->email_privat }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Projekte</label>
    <div class="col-md-6 mt-2">
        {{ $employe->projects }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Stundensatz</label>
    <div class="col-md-6 mt-2">
        {{ $employe->stundensatz }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Geburtstag</label>
    <div class="col-md-6 mt-2">
        {{ $employe->birthday }}
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Kommentar</label>
    <div class="col-md-6 mt-2">
        {{ $employe->comment }}
    </div>
</div>


@role('admin|super admin') 
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Admin Kommentar</label>
    <div class="col-md-6 mt-2">
        {{ $employe->admincomment }}
    </div>
</div>
@endrole


<div class="form-group row mb-2">
    <div class="col-md-4 text-right">{{ HButton::back(route('root')) }}</div>
    <div class="col-md-6 text-left">{{ HButton::edit(route('profil.edit')) }}</div>
</div>


{{ Card::Close() }}

@endsection

@section('bodyend')
@endsection