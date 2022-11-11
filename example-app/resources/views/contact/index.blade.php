@extends('contact.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" style="background-color: green; color: white;" class="btn btn-succus btn-sm" title="nieuwe contact toevoegen">
                            nieuwe contact
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>naam</th>
                                        <th>achternaam</th>
                                        <th>email</th>
                                        <th>telefoon</th>
                                        <th>acties</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($contact as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->naam }}</td>
                                            <td>{{ $item->achternaam }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->telefoon }}</td>

                                            <td>
                                                <a href="{{ url('/contact/' . $item->id) }}" title="Bekijk contact"><button class="btn btn-info">bekijken</button></a>
                                                <a href="{{ url('/contact/' . $item->id . '/edit')}}" title="bijwerken contact"><button class="btn btn-secondary">bijwerken</button></a>
                                                
                                                <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display: inline;">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btm-sm" title="verwijderen contact" onclick="return confirm("bevestigen contact")">verwijderen</button>
                                                </form>
                                            </td>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection