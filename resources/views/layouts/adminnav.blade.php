<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand navLinkOverride" href="{{ url('/home') }}">JunkerHQ Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-1">
      <ul class="nav navbar-nav navbar-left">
        <li class="text-center"><a href="{{ url('/home/collections') }}" class="navLinkOverride">Collections</a></li>
        <li class="text-center"><a href="{{ url('/home/items') }}" class="navLinkOverride">Items</a></li>
        <li class="text-center"><a href="#" class="navLinkOverride">Images</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>