@extends('layouts.base')
@section('title','Add Character')

@section('content')
  <div class="characters">
    <h1 >Add your favourite character</h1>
    <form action="/addCharacter" method="POST">
      @csrf
      <div>
        <label class="character" for="name">Character Name</label>
        <input type="text" name="name" class="character_illustrator">
      </div>
      <br>
      <div>
        <label class="character" for="comic_name">Comic Title</label>
        <input type="text" name="comic_name" class="character_illustrator">
      </div>
      <br>
      <div>
        <label class="character" for="creation_year">Year</label>
        <input class="character_illustrator" type="number" name="creation_year">
      </div>
      <br>
      <div>
        <label class="character " for="illustrator">Illustrator</label>
        <select name="illustrator_id" type="text" class="character_illustrator" id="">
          @foreach ($illustrators as $illustrator)
            <option  value="{{$illustrator->id}}">{{$illustrator->name}}</option>
          @endforeach
        </select>
      </div>
      <br>
      
      <button class="character button_character" type="submit">Add</button>
    </form>
  </div>
    
@endsection
