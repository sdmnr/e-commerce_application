@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h2>Category: Mobile/ Product Listings</h2>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="#" data-toggle="modal" data-target="#product_reassign-modal"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Reassign All Products</p></button></a>
              </div>
              </div>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Product Name</th>
                      <th>Price Per Unit</th>
                      <th>Quantity in Inventory</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>RedMi</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a> <a href="#" data-toggle="modal" data-target="#product_reassign-modal">Reassign</a> 
                      </td>
                    </tr>
                   <tr>
                      <th>#2</th>
                      <td>RedMi 2</td>
                      <td>
                        15,000
                      </td>
                      <td>
                        4,500
                      </td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a> <a href="#" data-toggle="modal" data-target="#product_reassign-modal">Reassign</a> 
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
