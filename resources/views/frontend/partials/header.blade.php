
 <!-- *** TOPBAR *** _________________________________________________________
    -->
    <div id="top">
      <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
          <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>
          <a href="#">Get flat 35% off on orders over $50!</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
          <ul class="menu">
            <li>
              <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
            </li>
            <li>
              <a href="register">Register</a>
            </li>
            <li>
              <a href="contact">Contact</a>
            </li>
            <li>
              <a href="#">Recently viewed</a>
            </li>
            <li>
              <a href="dash"><button style="color: green;">Admin Dashboard</button></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
              <form action="customer-orders" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                  <input type="text" class="form-control" id="email-modal" placeholder="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password-modal" placeholder="password">
                </div>
                <div class="form-group">
                  <a href="forgotPassword">Forgot Password?</a> 
                </div>
                <p class="text-center">
                  <button class="btn btn-primary">
                    <i class="fa fa-sign-in"></i>Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted">
                <a href="register"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special
                discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- *** TOP BAR END *** -->
    <!-- *** NAVBAR *** _________________________________________________________
    -->
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
      <div class="container-fluid text-left">
        <div class="navbar-header">
          <a class="navbar-brand home" href="index" data-animate-hover="bounce">

                    <img src="img/newLogo.png" height="60px" alt="SAE" class="hidden-xs">

                </a>
          <div class="navbar-buttons">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
              <span class="sr-only">Toggle search</span>
              <i class="fa fa-search"></i>
            </button>
            <a class="btn btn-default navbar-toggle" href="basket">

                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">CART</span>

                    </a>
          </div>
        </div>
        <!--/.navbar-header -->
        <div class="navbar-collapse collapse" id="navigation">
          <ul class="nav navbar-nav navbar-left">
            <li
            @if($pagetype=="index")
              class="active"
              @else
              class="hvr-sweep-to-bottom"
              @endif>
              <a href="index">Home</a>
            </li>
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">mobile<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5>BRANDS</h5>
                        <ul>
                          <li>
                            <a href="category">SAMSUNG</a>
                          </li>
                          <li>
                            <a href="category">MOTOROLLA</a>
                          </li>
                          <li>
                            <a href="category">SONY</a>
                          </li>
                          <li>
                            <a href="category">HTC</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>ACCESSORIES</h5>
                        <ul>
                          <li>
                            <a href="category">COVERS</a>
                          </li>
                          <li>
                            <a href="category">SCREEN PROTECTORS</a>
                          </li>
                          <li>
                            <a href="category">MOUNTS &amp; HOLDERS </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>MISCELLANEOUS</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>Featured</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">tablet<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5>BRANDS</h5>
                        <ul>
                          <li>
                            <a href="category">SAMSUNG</a>
                          </li>
                          <li>
                            <a href="category">MOTOROLLA</a>
                          </li>
                          <li>
                            <a href="category">SONY</a>
                          </li>
                          <li>
                            <a href="category">HTC</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>ACCESSORIES</h5>
                        <ul>
                          <li>
                            <a href="category">COVERS</a>
                          </li>
                          <li>
                            <a href="category">SCREEN PROTECTORS</a>
                          </li>
                          <li>
                            <a href="category">MOUNTS &amp; HOLDERS </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>MISCELLANEOUS</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>Featured</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">laptop<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5>BRANDS</h5>
                        <ul>
                          <li>
                            <a href="category">APPLE</a>
                          </li>
                          <li>
                            <a href="category">DELL</a>
                          </li>
                          <li>
                            <a href="category">HP</a>
                          </li>
                          <li>
                            <a href="category">LENOVO</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>ACCESSORIES</h5>
                        <ul>
                          <li>
                            <a href="category">COVERS</a>
                          </li>
                          <li>
                            <a href="category">SCREEN PROTECTORS</a>
                          </li>
                          <li>
                            <a href="category">MOUNTS &amp; HOLDERS </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>MISCELLANEOUS</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>Featured</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">motherboard<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5>BRANDS</h5>
                        <ul>
                          <li>
                            <a href="category">SAMSUNG</a>
                          </li>
                          <li>
                            <a href="category">MOTOROLLA</a>
                          </li>
                          <li>
                            <a href="category">SONY</a>
                          </li>
                          <li>
                            <a href="category">HTC</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>ACCESSORIES</h5>
                        <ul>
                          <li>
                            <a href="category">COVERS</a>
                          </li>
                          <li>
                            <a href="category">SCREEN PROTECTORS</a>
                          </li>
                          <li>
                            <a href="category">MOUNTS &amp; HOLDERS </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>MISCELLANEOUS</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>Featured</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            <li class="dropdown yamm-fw">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">processor<b class="caret"><br></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-sm-3">
                        <h5>BRANDS</h5>
                        <ul>
                          <li>
                            <a href="category">SAMSUNG</a>
                          </li>
                          <li>
                            <a href="category">MOTOROLLA</a>
                          </li>
                          <li>
                            <a href="category">SONY</a>
                          </li>
                          <li>
                            <a href="category">HTC</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>ACCESSORIES</h5>
                        <ul>
                          <li>
                            <a href="category">COVERS</a>
                          </li>
                          <li>
                            <a href="category">SCREEN PROTECTORS</a>
                          </li>
                          <li>
                            <a href="category">MOUNTS & HOLDERS </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>MISCELLANEOUS</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-sm-3">
                        <h5>Featured</h5>
                        <ul>
                          <li>
                            <a href="category">Trainers</a>
                          </li>
                          <li>
                            <a href="category">Sandals</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /.yamm-content -->
                </li>
              </ul>
            </li>
            </ul>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
        <div class="navbar-buttons">
          <div class="navbar-collapse collapse right" id="basket-overview">
            <a href="basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">CART</span></a>
          </div>
          <!--/.nav-collapse -->
          <div class="navbar-collapse collapse right" id="search-not-mobile">
            <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
              <span class="sr-only">Toggle search</span>
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
        <div class="collapse clearfix" id="search">
          <form action="category" class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#navbar -->
    <!-- *** NAVBAR END *** -->
