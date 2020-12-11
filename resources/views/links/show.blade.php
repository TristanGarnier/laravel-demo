@extends('layouts.application')
@extends('navbar')
@section('content')
<h1>lien numero {{ $link->id }}</h1>
<h3>Nom du site:</h3>
<p>{{ $link->name }}</p>
<h3>URL du site:</h3>
<p>{{ $link->url }}</p>
<h2>Commentaire : </h2>
<form method="POST" action="{{ route('comments.store') }}">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="content" placeholder="Rédigez votre commentaire">
    </div>
    <input type="hidden" name=link_id value="{{ $link->id }}">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<ul>
    @foreach ($comments as $comment)
        <li>
            <p>{{ $comment }}</a>
        </li>
    </br>
    @endforeach
</ul>
@endsection