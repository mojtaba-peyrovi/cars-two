@extends('master')
@section('main')
    @if (count($errors)>0)
        <div class="row" style="color:red">
            <div class="col-md-6 col-md-offset-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <ul>

            </ul>
        </div>
    </div>
    <div class="row">
          <div class="col-md-6">
              <h3>SIGN UP</h3><br>
              <form class="" action="{{route('signup')}}" method="post">
                  <div class="form-group">
                      <label for="email">Your Email</label>
                      <input class="form-control" type="text" name="email" id="email">
                  </div>
                  <div class="form-group">
                      <label for="name">Your First Name</label>
                      <input class="form-control" type="text" name="name" id="name">
                  </div>
                  <div class="form-group">
                      <label for="email">Your Password</label>
                      <input class="form-control" type="password" name="password" id="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
          </div>
          <div class="col-md-6">
              <h3>SIGN IN</h3><br>
              <form class="" action="{{route('signin')}}" method="post">
                  <div class="form-group">
                      <label for="email">Your Email</label>
                      <input class="form-control" type="text" name="email" id="email">
                  </div>

                  <div class="form-group">
                      <label for="password">Your Password</label>
                      <input class="form-control" type="password" name="password" id="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
          </div>
      </div><br><br>
@endsection
