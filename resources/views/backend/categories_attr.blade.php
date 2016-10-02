@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-8">
              <h2>List of Attributes for Category: Mobile</h2>
              </div>
              <div class="col-md-offset-1 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#attr_edit-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Attributes</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Attributes.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Attribute Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>Brand</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td>Accessories</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#3</th>
                      <td>Miscellaneous</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>Featured</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#attr_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#attr_delete-modal">Delete</a>
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