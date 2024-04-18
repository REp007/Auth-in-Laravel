@extends('layout.master')


@section('title', 'elev'.$eleve->id)




@section('content')
<table>
    <tr>
        <td>ID Eleve : </td>
        <td>
            {{ $eleve->id }}
        </td>
    </tr>
    <tr>
        <td>Nom : </td>
        <td>
            {{ $eleve->nom }}
        </td>
    </tr>
    <tr>
        <td>Prenom : </td>
        <td>
            {{ $eleve->prenom }}
        </td>
    </tr>
    <tr>
        <td>ID Club : </td>
        <td>
            {{ $eleve->club_id }}
        </td>
    </tr>
</table>
    <h1>List d'activités auxquelles l'éleve a participé</h1>


    <table border="2px">
        <thead>
            <tr>
                <th>ID activite</th>
                <th>Description</th>
                <th>Date début</th>
                <th>Nombre de jours</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleve->activites as $activite)
            <tr>
                <td>{{ $activite->id }}</td>
                <td>{{ $activite->description }}</td>
                <td>{{ $activite->dateDebut }}</td>
                <td>{{ $activite->nombreJours }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            Nombre Total des jours : {{ $nbrTotalJour }}
        </tfoot>
    </table>
@endsection
