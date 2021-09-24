<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="{{'/css/welcome.css'}}">
  <title>Document</title>
</head>
<body>
  <header>
    <nav class="menu">
      <ul class="menu_list">
        <li>
          <a href="/">Accueil</a>
        </li>
        <li>
          <a href="/characters">Characters</a>
        </li>
        <li>
          <a href="/addCharacter">Add Character</a>
        </li>
        <li>
          <a href="/illustrators">Illustrators</a>
        </li>
        <li>
          <a href="/addIllustrator">Add Illustrator</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
  <footer></footer>
  
</body>
</html>