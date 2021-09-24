@extends('layouts.base')
@section('title','illustrators')

@section('content')
  <div class="illustrators">
    <h1>The best illustrators of the year</h1>
    <table>
      <thead>
        <tr>
          <th class="illustrator">#</th>
          <th class="illustrator">Name</th>
          <th class="illustrator">Birth Year</th>
          <th class="illustrator">Nationality</th>
          <th class="illustrator">Edit</th>
          <th class="illustrator">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($illustrators as $illustrator)
          <tr>
            <td>{{$illustrator->id}}</td>
            <td>{{$illustrator->name}}</td>
            <td>{{$illustrator->birth_year}}</td>
            <td>{{$illustrator->nationality}}</td>
            <td >
              <form action="/modifyIllustrator" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$illustrator->id}}>
                <input class="illustrator" type="submit" value="edit">
              </form>
            </td>
            <td>
              <form action="/deleteIllustrator" method="POST">
                @csrf
                <input type="hidden" name="id" value={{$illustrator->id}}>
                <input class="illustrator" type="submit" value="x">
              </form>
            </td>
          </tr>  
        @endforeach
      
      </tbody>
    </table>
  </div>
    
@endsection
