@extends('backend.partials.layout')

@section('content')
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="col-md-12" id="customer-orders">
            <div class="box">
              <div class="row">
              <div class="col-md-6">
              <h1>Orders</h1>
              <p class="lead">Your orders in one place.</p>
              </div>
              <div class="col-md-6 pull-right">
              @include('backend.partials.date')
              </div>
              </div>
              <hr>
              <div class="table-responsive">
                <table id="example" class="table table-hover table-striped table-bordered" border="2px">
                  <thead>
                    <tr>
                      <th>Order No.</th>
                      <th>Username</th>
                      <th>Ordered On</th>
                      <th>Payment Type</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Order No.</th>
                      <th>Username</th>
                      <th>Ordered On</th>
                      <th>Payment Type</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1734</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1733</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-success">Credit Card</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1729</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-warning">Cash On Delivery</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th># 1735</th>
                      <td>User20@gmail.com</td>
                      <td>22/06/2013</td>
                      <td>
                        <span class="label label-info">E-Wallet</span>
                      </td>
                      <td>
                        <div class="control-group">
                          <div class="controls">
                            <select name="orderStatus" id="orderStatus">
                              <option value="Pending">Pending</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                          </div>
                        </div>
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
