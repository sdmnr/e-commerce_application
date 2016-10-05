@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-8">
              <h2>Banners</h2>
              </div>
              <div class="col-md-offset-1 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#banner_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Banners</p></button></a>
              </div>
              </div>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Image Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#6</th>
                      <td>Banner2.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#7</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#8</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#9</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#10</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#11</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#12</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#13</th>
                      <td>Banner1.jpg</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#banner_delete-modal">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /#content -->
@endsection
