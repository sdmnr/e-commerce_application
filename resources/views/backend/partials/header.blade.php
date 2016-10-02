  @include('backend.partials.modals')
    <!-- *** NAVBAR *** _________________________________________________________
    -->
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
      <div class="container-fluid text-left">
        <div class="navbar-header">
          <a class="navbar-brand home" href="dash" data-animate-hover="bounce">

                    <img src="img/newLogo.png" height="60px" alt="SAE" class="hidden-xs">

                </a>
        </div>
        <!--/.navbar-header -->
        <div class="navbar-collapse collapse" id="navigation">
          <ul class="nav navbar-nav navbar-left">
            <li
            @if($pagetype=="dash")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="dash">Dashboard</a>
            </li>
            <li
            @if($pagetype=="orders")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="orders">Orders</a>
            </li>
            <li
            @if($pagetype=="categories_main")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="categories_main">Categories</a>
            </li>
            <li
            @if($pagetype=="products_main")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="products_main">Products</a>
            </li>
            <li
            @if($pagetype=="banners_main")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="banners_main">Banners</a>
            </li>
            <li
            @if($pagetype=="static_main")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="static_main">Static Pages</a>
            </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
          <div class="navbar-collapse collapse pull-right" id="navigation">
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Admin<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3 pull-right">
                        <a href="/index"><h5>LOGOUT</h5></a>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            </ul>
          </div>
        <!--/.nav-collapse -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#navbar -->
    <!-- *** NAVBAR END *** -->
