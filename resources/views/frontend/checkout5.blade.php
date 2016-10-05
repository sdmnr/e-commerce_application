@extends('frontend.partials.layout')

@section('content')

<div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li>
                <a href="#">Home</a>
              </li>
              <li>Checkout - Order Confirmed</li>
            </ul>
          </div>
          <div class="col-md-9" id="checkout">
            <div class="box">
              <form method="post" action="category">
              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <h1>Checkout - Order Confirmed</h1>
                <h3>Congratulations.</h3><p class="text-muted"> Your order has been placed successfully. It will be processed and dispatched immediately. You are likely to recieve it in 8-10 bussiness days. Thank you for shopping with us. </p>
                <div class="content">
                  <div class="table-responsive">
                    <table id="example" class="table table-hover table-striped table-bordered">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>
                          <th>Discount</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <a href="#">

                                                        <img src="img/product2.jpg" alt="White Blouse Armani">

                                                    </a>
                          </td>
                          <td>
                            <a href="#">Apple</a>
                          </td>
                          <td>2</td>
                          <td>$123.00</td>
                          <td>$0.00</td>
                          <td>$246.00</td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">

                                                        <img src="img/product3.png" alt="Black Blouse Armani">

                                                    </a>
                          </td>
                          <td>
                            <a href="#">Gigabyte</a>
                          </td>
                          <td>1</td>
                          <td>$200.00</td>
                          <td>$0.00</td>
                          <td>$200.00</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th>$446.00</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.content -->
                <div class="box-footer">
                  <div class="pull-left">
                    <a href="customer-orders" class="btn btn-default"><i class="fa fa-chevron-left"></i>My Orders</a>
                  </div>
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Continue Shopping
                      <i class="fa fa-chevron-right"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col-md-9 -->
          <div class="col-md-3">
            <div class="box" id="order-summary">
              <div class="box-header">
                <h3>Order summary</h3>
              </div>
              <p class="text-muted">Shipping and additional costs are calculated based on the values you have
                entered.</p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Order subtotal</td>
                      <th>$446.00</th>
                    </tr>
                    <tr>
                      <td>Shipping and handling</td>
                      <th>$10.00</th>
                    </tr>
                    <tr>
                      <td>Tax</td>
                      <th>$0.00</th>
                    </tr>
                    <tr class="total">
                      <td>Total</td>
                      <th>$456.00</th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-3 -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /#content -->

@endsection
