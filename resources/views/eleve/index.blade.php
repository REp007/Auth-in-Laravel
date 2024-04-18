@extends('layout.master')


@section('title', 'eleve list')



@section('content')
<h3>List des éleves</h3>



<table border="2px">
    <thead>
        <tr>
            <th>Id Eleve</th>
            <th>Nom </th>
            <th>Prenom</th>
            <th>Id Club</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>more</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td>{{ $eleve->club_id }}</td>
                <td>
                    <a href="{{ route('eleve.edit', $eleve) }}">
                        <button>Edit</button>
                    </a>
                </td>
                <td>
                    <a href="#">
                        <button>Delete</button>
                    </a>
                </td>
                <td>
                    <a href="{{ route('eleve.show', $eleve) }}">
                        >>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot></tfoot>
</table>
@endsection
