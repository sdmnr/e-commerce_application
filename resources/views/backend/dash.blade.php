@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h1>Dashboard</h1>
              </div>
              <div class="col-md-6 pull-right">
              @include('backend.partials.date')
              </div>
              </div>
              <hr>
              <div class="row">
                <div class="container">
                    <div class="col-md-11" style="background-color: grey;">
                        <img src="img/DashboardGraph.png" style="width: 100%;">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="box same-height clickable">
                  <div class="icon">
                    <i class="fa fa-heart"></i>
                  </div>
                  <h3>
                    <a href="#">Most Sold Products</a>
                  </h3>
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
              </div>
              <div class="col-sm-4">
                <div class="box same-height clickable">
                  <div class="icon">
                    <i class="fa fa-tags"></i>
                  </div>
                  <h3>
                    <a href="#">Most Profitable Products</a>
                  </h3>
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
              </div>
              <div class="col-sm-4">
                <div class="box same-height clickable">
                  <div class="icon">
                    <i class="fa fa-thumbs-up"></i>
                  </div>
                  <h3>
                    <a href="#">Most Important Clients</a>
                  </h3>
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
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
      </div>
      <!-- /#content -->
@endsection