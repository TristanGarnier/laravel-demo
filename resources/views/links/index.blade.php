@extends('layouts.application')
@extends('navbar')
@section('content')

<h1>Mes Liens</h1>

<ul>
    @foreach ($links as $link)
        <li>
            <div class="row">
                <div class="col-lg-1">
                    <a href="/laravel-demo/public/links/{{ $link->id }}">{{ $link->name }}</a>
                </div>
                <div class="col-lg-8">
                    <a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a>
                </div>
                <div class="col-lg-3">
                    <p>Créer le: {{ $link->created_at }}</a>
                </div>
            </div>
        </li>
    </br>
    @endforeach
</ul>
    
@endsection