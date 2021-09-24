@extends('layouts.base')
@section('title','characters')

@section('content')
  <div class="characters_modify">
    <h1>Edit your character</h1>
    <form action="/editCharacter" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $character->id }}">
      <br>
      <div>
        <label for="name">Character Name</label>
        <input class="modify_character" type="text" name="name" value="{{$character->name}}">
      </div>
      <br>
      <div>
        <label for="comic_name">Comic title</label>
        <input type="text" name="comic_name" class="modify_character" value="{{$character->comic_name}}" >
      </div>
      <br>
      <div>
        <label for="creation_year">Year</label>
        <input type="number" name="creation_year" class="modify_character" value="{{$character->creation_year}}">
      </div>
      <br>
      <div>
        <label for="illustrator">Illustrator</label>
        <select class="modify_character" type="text" name="illustrator_id" id="">
          @foreach ($illustrators as $illustrator)
            <option value="{{$illustrator->id}}">{{$illustrator->name}}</option>
          @endforeach
        </select>
      </div>
      <br>
      <button class="edit_character" type="submit">Validate Modifications</button>
    </form>
    
  </div>
    
@endsection
