@extends('layouts.base')
@section('title','Add illustrator')

@section('content')
  <div class="illustrators">
    <h1 >Add your favourite illustrator</h1>
    <form action="/addIllustrator" method="POST">
      @csrf
      <div>
        <label class="illustrator" for="name">Name</label>
        <input type="text" name="name" class="character_illustrator">
      </div>
      <br>
      <div>
        <label class="character" for="birth_year">Birth year</label>
        <input type="number" name="birth_year" class="character_illustrator">
      </div>
      <br>
      <div>
        <label class="character" for="nationality">Nationality</label>
        <input class="character_illustrator" type="text" name="nationality">
      </div>
      <br>
      <button class="character button_character" type="submit">Add</button>
    </form>
  </div>
    
@endsection
