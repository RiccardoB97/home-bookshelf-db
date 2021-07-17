@extends('layout.app')
@section('title', 'Home - Libreria di casa')
@section('main_content')
    <table class="table">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Genere</th>
                <th>Casa editrice</th>
                <th>Copertina</th>
                <th>ISBN</th>
                <th>Letto da Gaia</th>
                <th>Voto Gaia</th>
                <th>Letto da mamma</th>
                <th>Voto Mamma</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td scope="row">{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->publisher}}</td>
                    <td><img src="{{$book->cover}}" width="100" alt="{{$book->title}}"></td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->gaia_read}}</td>
                    <td>{{$book->gaia_vote}}</td>
                    <td>{{$book->mum_read}}</td>
                    <td>{{$book->mum_vote}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection