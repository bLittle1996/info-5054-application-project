<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>

        <link href="/css/app.css" rel="stylesheet">
    </head>
  <body>
  <div id="wrap">
      @include('layouts/header')
      <div id="profileImg"><img src="img/profileDefault.jpg" alt="Profile Image"></div>
      <div id="top"></div>
      <section id="formContainer">
        <div id="halfCircle"></div>
            <div id="formWrap">
                <div class="col-lg-6 col-md-12">
                  <h1>VEHICLE</h1>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/vehicle') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-2 control-label">Model</label>

                            <div class="col-md-8">
                                <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}" required>

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
                            <label for="make" class="col-md-2 control-label">Make</label>

                            <div class="col-md-8">
                                <input id="make" type="text" class="form-control" name="make" value="{{ old('make') }}" required>

                                @if ($errors->has('make'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('colour') ? ' has-error' : '' }}">
                            <label for="colour" class="col-md-2 control-label">Colour</label>

                            <div class="col-md-8">
                                <input id="colour" type="text" class="form-control" name="colour" required>

                                @if ($errors->has('colour'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colour') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label for="year" class="col-md-2 control-label">Year</label>

                            <div class="col-md-8">
                                <input id="year" type="text" class="form-control" name="year" required>

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('plate') ? ' has-error' : '' }}">
                            <label for="plate" class="col-md-2 control-label">Plate</label>

                            <div class="col-md-8">
                                <input id="plate" type="text" class="form-control" name="plate" required>

                                @if ($errors->has('plate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('plate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vinNum') ? ' has-error' : '' }}">
                            <label for="vinNum" class="col-md-2 control-label">VIN Number</label>

                            <div class="col-md-8">
                                <input id="vinNum" type="text" class="form-control" name="vinNum" required>

                                @if ($errors->has('vinNum'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vinNum') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit Vehicle
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="col-lg-6 col-md-12">
                  <h1 class="text-right">PERSONAL</h1>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/personal') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-2 control-label">Home Address</label>

                            <div class="col-md-8">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-2 control-label">City</label>

                            <div class="col-md-8">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                            <label for="province" class="col-md-2 control-label">Province</label>

                            <div class="col-md-8">
                                <input id="province" type="text" class="form-control" name="province" value="{{ old('province') }}" required>

                                @if ($errors->has('province'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('postal') ? ' has-error' : '' }}">
                            <label for="postal" class="col-md-2 control-label">Postal Code</label>

                            <div class="col-md-8">
                                <input id="postal" type="text" class="form-control" name="postal" value="{{ old('postal') }}" required>

                                @if ($errors->has('postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-2 control-label">Country</label>

                            <div class="col-md-8">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-6">
                                <button type="submit" class="btn btn-primary">
                                    Submit Personal
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
          </section>
          <!--FOOTER START-->
          @include('layouts/footer')
        </div>
    </body>
  </html>
