@extends('main')

@section('title', 'Partecipazione asta benefica - Treviso30News')

@section('metadata')

Form per partecipare all'asta benefica.

@endsection

@section('stylesheets')

<!-- Style CSS -->
<link rel="stylesheet" href="{{ url('/css/style.css') }}">
<style>
    .invalid-feedback {
        display: block;
    }
</style>

@endsection

@section('content')

<h4 class="text-center mb-4">Arte per bene</h4>

<h5 class="mb-4">Invia un'offerta</h5>

<form method="post" action="{{ route('contact.store') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" placeholder="Mario">
            @if($errors->has('name'))
                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="surname">Cognome</label>
            <input type="text" class="form-control" name="surname" placeholder="Rossi">
            @if($errors->has('surname'))
                <small class="form-text invalid-feedback">{{ $errors->first('surname') }}</small>
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="mariorossi@gmail.com">
            @if($errors->has('email'))
                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="address">Indirizzo completo</label>
            <input type="text" class="form-control" name="address" placeholder="Viale della Repubblica, 194, 31100 Treviso TV" aria-describedby="addressHelpBlock">
            <small id="addressHelpBlock" class="form-text text-muted">
                Inserire l'indirizzo completo, compreso di numero civico, città, CAP e provincia
            </small>
            @if($errors->has('address'))
                <small class="form-text invalid-feedback">{{ $errors->first('address') }}</small>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Numero di telefono</label>
            <input type="text" class="form-control" name="phone" aria-describedby="phoneHelpBlock">
            <small id="phoneHelpBlock" class="form-text text-muted">
                Inserire numero di telefono senza prefisso nazionale
            </small>
            @if($errors->has('phone'))
                <small class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nopera">Numero dell'opera</label>
            <input type="text" class="form-control" name="nopera">
            @if($errors->has('nopera'))
                <small class="form-text invalid-feedback">{{ $errors->first('nopera') }}</small>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label for="money">Offerta</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">€</div>
                </div>
                <input type="text" class="form-control" name="money" placeholder="10.000,00">
            </div>
            @if($errors->has('money'))
                <small class="form-text invalid-feedback">{{ $errors->first('money') }}</small>
            @endif
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-4">Invia offerta</button>
</form>

@endsection
