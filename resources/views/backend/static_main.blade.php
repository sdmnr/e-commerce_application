@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h2>Static Pages</h2>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#static_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Static Pages</p></button></a>
              </div>
              </div>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Page Name</th>
                      <th>Body</th>
                      <th>Url</th>
                      <th>Icon</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#2</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#4</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>Offers</td>
                      <td>Body Content</td>
                      <td>
                        /offers/
                      </td>
                      <td>
                        offers.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#6</th>
                      <td>Sale</td>
                      <td>Body Content</td>
                      <td>
                        /sale/
                      </td>
                      <td>
                        sale.png
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#static_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#static_delete-modal">Delete</a>
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
