@extends('layouts.base')
@section('title','characters')

@section('content')

  <div class="characters">
    <h1>The best characters of the year</h1>
    <table>
      <thead>
        <tr>
          <th class="character">#</th>
          <th class="character">Name</th>
          <th class="character">Comic Title</th>
          <th class="character">Year</th>
          <th class="character">Illustrator</th>
          <th class="character">Edit</th>
          <th class="character">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($characters as $character)
          <tr>
            <td>{{$character->id}}</td>
            <td>{{$character->name}}</td>
            <td>{{$character->comic_name}}</td>
            <td>{{$character->creation_year}}</td>
            <td>{{$character->illustrator->name}}</td>
            <td >
              <form action="/modifyCharacter" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$character->id}}>
                <input class="character" type="submit" value="edit">
              </form>
            </td>
            <td>
              <form action="/deleteCharacter" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$character->id}}>
                <input class="character" type="submit" value="x">
              </form>
            </td>
          </tr>  
        @endforeach
      
      </tbody>
    </table>
  </div>
    
@endsection
