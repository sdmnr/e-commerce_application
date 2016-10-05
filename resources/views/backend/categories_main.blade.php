@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h1>Categories</h1>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#cat_add-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Categories</p></button></a>
              </div>
              </div>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Category</th>
                      <th>Is Visible</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td><a href="categories_prodlist">Mobiles</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#cat_edit-modal">Edit</a> <a href="#" data-toggle="modal" data-target="#cat_delete-modal">Delete</a> <a href="categories_attr">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#2</th>
                      <td><a href="categories_prodlist">Tablets</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="categories_attr">List Attributes</a> 
                      </td>
                    </tr>
                   <tr>
                      <th>#3</th>
                      <td><a href="categories_prodlist">Laptops</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="categories_attr">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td><a href="categories_prodlist">Motherboards</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="categories_attr">List Attributes</a> 
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td><a href="categories_prodlist">Processors</a></td>
                      <td>
                        <input type="checkbox" name="visible">
                      </td>
                      <td>
                        <a href="href="#" data-toggle="modal" data-target="#cat_edit-modal"">Edit</a> <a href="href="#" data-toggle="modal" data-target="#cat_delete-modal"">Delete</a> <a href="categories_attr">List Attributes</a> 
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
