@extends('layout.master')


@section('title', 'Edit eleve')


@section('content')


    <h3>Modifier un éleve {{ $eleve->id }}</h3>
    <form action="{{ route('eleve.update', $eleve) }}" method="POST">

        <table>
            <tr>
                <td>Id Eleve</td>
                <td>
                    <input type="text" name="id" value="{{ $eleve->id }}" id="" readonly>
                </td>
            </tr>
            <tr>
                <td>Nom : </td>
                <td>
                    <input type="text" name="nom" value="{{ $eleve->nom }}" id="">
                </td>
            </tr>
            <tr>
                <td>Prénom :</td>
                <td>
                    <input type="text" name="prenom" value="{{ $eleve->prenom }}" id="">
                </td>
            </tr>
            <tr>
                <td>ID Club : </td>
                <td>
                    <select name="club_id" id="">
                        <option value="">Select un club</option>
                        @foreach ($clubs as $club)
                            <option value="{{ $club->id }}">{{ $club->nom }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Modifier</button>
                </td>
                <td>
                    <a href="{{ route('eleve.index') }}">
                        <button type="button">Annuler</button>
                    </a>
                </td>
            </tr>
        </table>


    </form>
@endsection
