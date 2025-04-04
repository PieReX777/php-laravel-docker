@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Contacto</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Teléfono:</strong> {{ $contact->phone }}</p>
            <p><strong>Dirección:</strong> {{ $contact->address }}</p>
        </div>
    </div>

    <a href="{{ route('contacts.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
</div>
@endsection
