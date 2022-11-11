@extends('contact.layout')
@section('content')

<div class="card" style="margin: 20px;">
    <div class="card-header">Contacten pagina</div>
    <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Naam : {{ $contact->naam }}
        <h6 class="card-text">Achternaam : {{ $contact->achternaam }}
        <h6 class="card-text">Email : {{ $contact->email }}
        <h6 class="card-text">Telefoon : {{ $contact->telefoon }}
    </div>
</div