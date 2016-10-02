@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-12">
              <h1>Products/ Edit Products</h1>
              </div>
              </div>
              <hr>
              <div class="row">
                <div class="container">
                        <form action="products_main">
                        <div class="col-md-6 customer-orders">
                          <label>Product Name:</label><br>
                          <input type="text" name="categoryname"><br><br>
                          <label>Quantity in Stock:</label><br>
                          <input type="number" name="categoryname"><br><br>
                          <label>Price Per Unit</label><br>
                          <input type="number" name="categoryname"><br><br>
                          <form action="products_main">
                          <div class="control-group">
                          <label class="control-label">Category:</label>
                          <div class="controls">
                            <select name="reassign" id="reassign">
                              <option value="Mobiles">Mobiles</option>
                              <option value="Tablets">Tablets</option>
                              <option value="Laptops">Laptops</option>
                              <option value="Motherboards">Motherboards</option>
                              <option value="Processor">Processor</option>
                            </select>
                             </div>
                             </div><br><br>
                          <input type="submit" name="submit" value="Save">
                          <a href="products_main"><button>Cancel</button></a>
                          </div>
                          <div class="col-md-6 customer-orders">
                          <label>Images:</label>
                          <input type="file" name="pic"><a href="#"><span class="glyphicon glyphicon-trash"></span>Trash</a><br><br>
                          <a href=""><b>+</b> Add More Images</a><br>
                          <br>
                          </div>
                        </form>
                    
                     
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </div>
      <!-- /#content -->
@endsection