<header>
  <div class="logo_box">
    <img src="/img/dc-logo.png" >
  </div>
    <ul class="nav">
      <li>
        <a href="">CHARACTERS</a>
      </li>
      <li class="{{Request::route()->getName() == 'comics' || 'comic_details' ? 'active' : ''}}">
        <a href="{{route('comics') }}">COMICS</a>
      </li>
      <li>
        <a href="">MOVIES</a>
      </li>
      <li>
        <a href="">TV</a>
      </li>
      <li>
        <a href="">COLLECTIBLES</a>
      </li>
      <li>
        <a href="">VIDEOS</a>
      </li>
      <li>
        <a href="">FANS</a>
      </li>
      <li>
        <a href="">NEWS</a>
      </li>
      <li>
        <a href="">SHOP</a>
      </li>
    </ul>
</header>  
