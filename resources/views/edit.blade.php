@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Contacto</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $contact->name) }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>

        <div class="form-group mt-3">
            <label for="phone">Teléfono:</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>

        <div class="form-group mt-3">
            <label for="address">Dirección:</label>
            <textarea name="address" id="address" class="form-control">{{ old('address', $contact->address) }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning mt-3">Actualizar Contacto</button>
    </form>
</div>
@endsection
