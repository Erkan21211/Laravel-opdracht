@extends('contact.layout')
@section('content')

    <div class="card" style="margin: 20px;">
        <div class="card-header">Maak nieuwe contact aanmaken</div>
        <div class="card-boy">
            <form action="{{ url('contact') }}" method="POST">
                {!! csrf_field() !!}
                <label>naam</label>
                <input type="text" name="naam" id="naam" class="form-control"></br>
                <label>achternaam</label>
                <input type="text" name="achternaam" id="achternaam" class="form-control"></br>
                <label>email</label>
                <input type="email" name="email" id="email" class="form-control"></br>
                <label>telefoon nummer</label>
                <input type="number" name="telefoon" id="telefoon" class="form-control"></br>

                <input type="submit" style="margin: 20px; background-color: green" value="Save" class="btn btn-succus"></br>
            </form>

        </div>
    </div>
@stop