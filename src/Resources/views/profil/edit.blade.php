@extends('master')

@section('content')

{{ Card::open('Profil anpassen') }}


@include('laravelKit.message')


{{ HForm::open(route('profil.update')) }}


<div class="form-group row mb-2">
    <label for="anrede_id" class="col-md-4 col-form-label text-md-right">Anrede</label>
    <div class="col-md-6">
       {{ HForm::comboBox('anrede_id', $employe->getDatenAnreden(), old('anrede_id', $employe->anrede_id)  ) }}
    </div>
</div>




<div class="form-group row mb-2">
    <label for="titel" class="col-md-4 col-form-label text-md-right">Titel</label>
    <div class="col-md-6">
        {{ HForm::text('titel', old('titel', $employe->titel)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="vorname" class="col-md-4 col-form-label text-md-right">Vorname</label>
    <div class="col-md-6">
        {{ HForm::text('vorname', old('vorname', $employe->vorname)  ) }}
    </div>
</div>


<div class="form-group row mb-2">
    <label for="nachname" class="col-md-4 col-form-label text-md-right">Nachname</label>
    <div class="col-md-6">
        {{ HForm::text('nachname', old('nachname', $employe->nachname)  ) }}
    </div>
</div>

@role('admin|super admin') 
<div class="form-group row mb-2">
    <label for="signature_rule_id" class="col-md-4 col-form-label text-md-right">Signatur Recht</label>
    <div class="col-md-6">
       {{ HForm::comboBox('signature_rule_id', $employe->getDatenSigantureRules(), old('signature_rule_id', $employe->signature_rule_id)  ) }}
    </div>
</div>
@endrole

<div class="form-group row mb-2">
    <label for="strasse" class="col-md-4 col-form-label text-md-right">Strasse</label>
    <div class="col-md-6">
        {{ HForm::text('strasse', old('strasse', $employe->strasse)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="plz" class="col-md-4 col-form-label text-md-right">PLZ</label>
    <div class="col-md-6">
        {{ HForm::text('plz', old('plz', $employe->plz)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="ort" class="col-md-4 col-form-label text-md-right">Ort</label>
    <div class="col-md-6">
        {{ HForm::text('ort', old('ort', $employe->ort)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="telefon" class="col-md-4 col-form-label text-md-right">Telefon</label>
    <div class="col-md-6">
        {{ HForm::text('telefon', old('telefon', $employe->telefon)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="telefon2" class="col-md-4 col-form-label text-md-right">Telefon 2</label>
    <div class="col-md-6">
        {{ HForm::text('telefon2', old('telefon2', $employe->telefon2)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="mobil" class="col-md-4 col-form-label text-md-right">Mobil</label>
    <div class="col-md-6">
        {{ HForm::text('mobil', old('mobil', $employe->mobil)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
    <div class="col-md-6">
        {{ HForm::text('email', old('email', $employe->email)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="email_privat" class="col-md-4 col-form-label text-md-right">E-Mail Privat</label>
    <div class="col-md-6">
        {{ HForm::text('email_privat', old('email_privat', $employe->email_privat)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="projects" class="col-md-4 col-form-label text-md-right">Projekte</label>
    <div class="col-md-6">
        {{ HForm::text('projects', old('projects', $employe->projects)  ) }}
    </div>
</div>

@role('admin|super admin') 
<div class="form-group row mb-2">
    <label for="stundensatz" class="col-md-4 col-form-label text-md-right">Stundensatz</label>
    <div class="col-md-6">
        {{ HForm::text('stundensatz', old('stundensatz', $employe->stundensatz)  ) }}
    </div>
</div>
@endrole

<div class="form-group row mb-2">
    <label for="birthday" class="col-md-4 col-form-label text-md-right">Geburtstag</label>
    <div class="col-md-6">
        {{ HForm::date('birthday', old('birthday', $employe->birthday)  ) }}
    </div>
</div>

<div class="form-group row mb-2">
    <label for="comment" class="col-md-4 col-form-label text-md-right">Kommentar</label>
    <div class="col-md-6">
        {{ HForm::textArea('comment', old('comment', $employe->comment)  ) }}
    </div>
</div>

@role('admin|super admin') 
<div class="form-group row mb-2">
    <label for="vorname" class="col-md-4 col-form-label text-md-right">Admin Kommentar</label>
    <div class="col-md-6">
        {{ HForm::textArea('admincomment', old('admincomment', $employe->admincomment)  ) }}
    </div>
</div>
@endrole


<div class="form-group row mb-2">
    <div class="col-md-4 text-right">{{ HButton::back(route('profil.show')) }}</div>
    <div class="col-md-6 text-left">{{ HButton::submit() }}</div>
</div>


{{ HForm::close() }}
{{ Card::close() }}
@endsection




@section('bodyend')
@endsection