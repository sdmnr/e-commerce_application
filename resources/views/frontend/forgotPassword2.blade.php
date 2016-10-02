@extends('frontend.partials.layout')

@section('content')
<div id="all">
      <div id="content">
        <div class="container">
<div class="col-md-9">
            <div class="box">
              <h1>New Password</h1>
              <p class="lead">Change your password here.</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
              <form action="register" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="password_1">New password</label>
                      <input type="password" class="form-control" id="password_1">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="password_2">Retype new password</label>
                      <input type="password" class="form-control" id="password_2">
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i>Set New Password</button>
                </div>
              </form>
              <hr>
              </div>
          </div>
          </div>
          </div>
          </div>
          @endsection