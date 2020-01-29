@extends('layouts.base')

@section("content")

<div>

    <ul>
        @foreach ($comics as $comic)

        <li>
          TITLE: {{$comic["title"]}}
          <ul>
              <li>AUTHOR: {{$comic["author"]}}</li>
              <li>YEAR: {{$comic["year"]}}</li>
              <li>REVIEW: {{$comic["review"]}}</li>
              <li>VOTE: {{$comic["vote"]}}</li>
          </ul>
        </li>
        <br>

        @endforeach
    </ul>

</div>

@endsection
