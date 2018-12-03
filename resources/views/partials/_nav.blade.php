<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <ul class="nav navbar-nav navbar-right">
    	<li class="{{ Request::is('') ? "active" : "" }}"><a href="/">Home</a></li>
    	<li class="{{ Request::is('posts') ? "active" : "" }}"><a href="/posts/create">create</a></li>
    </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
    	<li class="{{ Request::is('posts') ? "active" : "" }}"><a href="/posts">post</a></li>
    </ul>
  </div>
</nav>