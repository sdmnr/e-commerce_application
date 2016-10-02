@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h2>Products</h2>
              </div>
              <div class="col-md-offset-3 col-md-3">
              <br><br>
              <a href="products_add"><button style="max-height: 31px;"><p style="color: Black; font-size: 18px;">Add Products</p></button></a>
              </div>
              </div>
              <hr>
              <form>
              <input type="text" name="search" placeholder="Search Products.."><input type="submit" name="submit" value="Search">
              </form><br>
              <div class="table-responsive">
                <table class="table table-hover" border="2px">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Price Per Unit</th>
                      <th>Quantity in Inventory</th>
                      <th>Added On</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>#1</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                   <tr>
                      <th>#2</th>
                      <td>Apple</td>
                      <td>Laptops</td>
                      <td>
                        30,000
                      </td>
                      <td>
                        2,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#3</th>
                      <td>Gigabyte</td>
                      <td>Motherboard</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#4</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
                      </td>
                    </tr>
                    <tr>
                      <th>#5</th>
                      <td>RedMi</td>
                      <td>Mobiles</td>
                      <td>
                        12,000
                      </td>
                      <td>
                        5,000
                      </td>
                      <td>12/9/2016</td>
                      <td>
                        <a href="products_edit">Edit</a> <a href="#" data-toggle="modal" data-target="#product_delete-modal">Delete</a>
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