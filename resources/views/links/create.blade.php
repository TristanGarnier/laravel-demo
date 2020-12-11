@extends('layouts.application')
@extends('navbar')
@section('content')
<h1>Créer un Lien</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif
<form method="POST" action="{{ route('links.store') }}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom">
    </div>
    <div class="form-group">
        <input type="text" name="url" class="form-control" placeholder="https://">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection