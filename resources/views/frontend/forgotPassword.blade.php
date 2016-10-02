@extends('frontend.partials.layout')

@section('content')
<div id="all">
      <div id="content">
        <div class="container">
        <div class="col-md-9">
            <div class="box">
              <h1>Forgot Password</h1>
              <p class="lead">Enter your Email here.</p>
              <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                ac turpis egestas.</p>
              <form action="forgotPassword2" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">Email-Id</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i>Send link for password change</button>
                </div>
              </form>
              <hr>
              </div>
          </div>
          </div>
          </div>
          </div>
 @endsection