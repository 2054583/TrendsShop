@extends('layouts.app')


@section('content')

    <h1>Ajouter un soulier</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form enctype="multipart/form-data" action="{{ url('soulier') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque" placeholder="Entrez une marque" name="marque">
        </div>

        <div class="form-group mb-3">

            <label for="taille">Ajouter la taille:</label>
            <input type="text" name="taille" id="taille" cols="30" rows="10" class="form-control"></input>
            <br>
            <input type ="file" name="photo">
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection