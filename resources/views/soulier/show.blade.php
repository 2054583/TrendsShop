@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>{{ $soulier->marque }}</h1>
            <p class="lead">{{ $soulier->taille }}US</p>
            <div>
            <img src="{{ asset('storage/images/upload/' . $soulier->photo) }}" alt="Soulier Image" style="height: 425px; width: 344px;"></div>
            <div class="btn-group">
                <a href="{{ url('soulier/'. $soulier->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <span class="mx-2"></span> 
                <form action="{{ url('soulier/'. $soulier->id) }}" method="POST" soulier="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection