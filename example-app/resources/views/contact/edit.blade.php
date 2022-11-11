@extends('contact.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Contact bewerken: <strong>{{ $contact->naam }} {{ $contact->achternaam }}</strong></div>
    <div class="card-body">
        <form action="{{ url('contact/' . $contact->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $contact->id }}" id="id" />
            <label>naam</label>
            <input type="text" name="naam" id="naam" value="{{ $contact->naam }}" class="form-control"></br>
            
            <label>achternaam</label>
            <input type="text" name="achternaam" id="achternaam" value="{{ $contact->achternaam }}" class="form-control"></br>

            <label>email</label>
            <input type="email" name="email" id="email" value="{{ $contact->email }}" class="form-control"></br>

            <label>telefoon nummer</label>
            <input type="number" name="telefoon" id="telefoon" value="{{ $contact->telefoon }}" class="form-control"></br>

            <input type="submit" style="margin: 20px; background-color: green" value="Update" class="btn btn-succus"></br>
        </form>
    </div>
</div

@stop