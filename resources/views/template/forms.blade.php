@extends('layouts.master')
@section('main-content')
<div class="col-lg-10 col-md-9 p-4">
  <div class="row pl-3 pt-2">
    <div class="col-md-12">
      <h3>Forms</h3>

    </div>
  </div>

  <div class="row pl-3 pt-2 mb-5">

    <div class="col-lg-6">
      <div class="card">
        <div class="card-header bg-white pb-1">
          <h5>Quick Example</h5>
        </div>
        <div class="card-body">
          <form action="#">
            <div class="form-group">
              <label for="#">Full Name</label>
              <input placeholder="Enter your full name" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="#">Email Address</label>
              <input placeholder="Enter email address" type="text" class="form-control">
              <small class="text-muted">Example hints to explain more.</small>
            </div>
            <div class="form-group">
              <label for="#">Password</label>
              <input placeholder="Enter your password" type="password" class="form-control">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="checkbox1"> <label class="form-check-label" for="checkbox1">Send
                me occasional newsletter</label>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Sign me up!">
            </div>
          </form>
        </div>
      </div>


      <div class="card mt-2">
        <div class="card-header bg-white pb-1">
          <h5>General Elements</h5>
        </div>
        <div class="card-body">
          <label class="mt-4" for="">Input</label>
          <input placeholder="Type here..." type="text" class="form-control">
          <label class="mt-4" for="">Input Disabled</label>
          <input placeholder="Type here..." type="text" class="form-control" disabled>
          <label class="mt-4" for="">Textarea</label>
          <textarea class="form-control" name="" id="" cols="30" rows="10">Type here...</textarea>
          <label class="mt-4" for="">Textarea Disabled</label>
          <textarea disabled class="form-control" name="" id="" cols="30" rows="10">Type here...</textarea>
          <label class="mt-4" for="">Checkbox</label>
          <br>
          <input type="checkbox" id="ch1"> <label for="ch1">Checkbox 1</label>
          <br>
          <input type="checkbox" id="ch2"> <label for="ch2">Checkbox 2</label>
          <br>
          <input type="checkbox" id="ch3" disabled> <label for="ch3">Checkbox disabled</label>
          <br>
          <label class="mt-4" for="">Radio</label> <br>
          <input type="radio" name="rd1" id="rd1"> <label for="rd1">Radio 1</label>
          <br>
          <input type="radio" name="rd1" id="rd2"> <label for="rd2">Radio 2</label>
          <br>
          <input type="radio" id="rd3" disabled> <label for="rd3">Radio disabled</label>

          <br>
          <label>Select</label>
          <select class="form-control" name="" id="">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 2</option>
          </select>
          <br>
          <label>Select disabled</label>
          <select disabled class="form-control" name="" id="">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 2</option>
          </select>
          <br>
          <label>Select multiple</label>
          <select multiple class="form-control" name="" id="">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 2</option>
          </select>
          <br>
          <label>Select multiple disabled</label>
          <select disabled multiple class="form-control" name="" id="">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 2</option>
          </select>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card">
        <div class="card-header bg-white pb-1">
          <h5>Horizontal Form</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                      checked>
                    <label class="form-check-label" for="gridRadios1">
                      First radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Second radio
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3"
                      disabled>
                    <label class="form-check-label" for="gridRadios3">
                      Third disabled radio
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-3">Checkbox</div>
              <div class="col-sm-9">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="card mt-2">
        <div class="card-header bg-white pb-1">
          <h5>Input Sizes</h5>
        </div>
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <input type="text" placeholder="form-control-lg" class="form-control form-control-lg">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="form-control">
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-sm" placeholder="form-control-sm">
            </div>
          </form>
        </div>
      </div>

      <div class="card mt-2">
        <div class="card-header pb-1 bg-white">
          <h5>Input addons</h5>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary text-white" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
              aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text bg-danger text-white" id="basic-addon2">@example.com</span>
            </div>
          </div>

          <label for="basic-url">Your vanity URL</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-info text-white" id="basic-addon3">https://example.com/users/</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary-lighter text-white">$</span>
            </div>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <span class="input-group-text bg-primary-lighter text-white">.00</span>
            </div>
          </div>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text bg-secondary">With textarea</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row -->

  <!-- start row -->
  <div class="row pl-3 my-4 mb-5">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-white pb-1">
          <h5>Validated Form</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto"
                  required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                  </div>
                  <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username"
                    aria-describedby="inputGroupPrepend3" required>
                  <div class="invalid-feedback">
                    Please choose a username.
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="City" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer04">State</label>
                <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="State" required>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationServer05">Zip</label>
                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Zip" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                  Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end row -->




</div>
@endsection
