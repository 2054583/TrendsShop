@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h2>Trends Shop</h2>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ url('soulier/create') }}">Ajouter un soulier</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

<br>
<br>
<br>

<div class="container">
    <div class="row">
        @foreach ($souliers as $index => $soulier)
        <div class="col-md-4">
            <div class="card card-body">
            <a href="{{ url('soulier/'. $soulier->id) }}">
        @if ($soulier->photo)
            <img src="{{ asset('storage/images/upload/' . $soulier->photo) }}" alt="Soulier Image" class="card-img-top" style="height: 200px; width: 200px;">
        @endif
             </a>
            <p>Sortie : {{ $soulier->created_at }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection