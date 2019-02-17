@extends('layouts.master')
@section('main-content')
<div class="col-lg-10 col-md-9 p-4">
  <div class="row pl-3 pt-2">
    <div class="col-md-12">
      <h3>Buttons</h3>
    </div>
  </div>

  <div class="row pl-3 pt-2 pb-5">
    <div class="col-md-12">
      <button class="btn btn-primary d-block mb-2">Primary</button>
      <button class="btn btn-secondary d-block mb-2">Secondary</button>
      <button class="btn btn-success d-block mb-2">Success</button>
      <button class="btn btn-warning d-block mb-2">Warning</button>
      <button class="btn btn-danger d-block mb-2">danger</button>
      <button class="btn btn-info d-block mb-2">Info</button>
      <button class="btn btn-light d-block mb-2">Light</button>
      <button class="btn btn-dark d-block mb-2">Dark</button>
      <br>
      <h5>Button Outline</h5>
      <button class="btn btn-outline-primary d-block mb-2">Primary</button>
      <button class="btn btn-outline-secondary text-dark d-block mb-2">Secondary</button>
      <button class="btn btn-outline-success d-block mb-2">Success</button>
      <button class="btn btn-outline-warning d-block mb-2">Warning</button>
      <button class="btn btn-outline-danger d-block mb-2">danger</button>
      <button class="btn btn-outline-info d-block mb-2">Info</button>
      <button class="btn btn-outline-light text-dark d-block mb-2">Light</button>
      <button class="btn btn-outline-dark d-block mb-2">Dark</button>
      <br>
      <h5>Button Disabled</h5>
      <button disabled class="btn btn-primary d-block mb-2">Primary</button>
      <button disabled class="btn btn-secondary d-block mb-2">Secondary</button>
      <button disabled class="btn btn-success d-block mb-2">Success</button>
      <button disabled class="btn btn-warning d-block mb-2">Warning</button>
      <button disabled class="btn btn-danger d-block mb-2">danger</button>
      <button disabled class="btn btn-info d-block mb-2">Info</button>
      <button disabled class="btn btn-light d-block mb-2">Light</button>
      <button disabled class="btn btn-dark d-block mb-2">Dark</button>
      <br>
      <h5>Size</h5>
      <button class="btn btn-sm btn-primary d-block mb-2">Primary</button>
      <button class="btn btn-primary d-block mb-2">Primary</button>
      <button class="btn btn-lg btn-primary d-block mb-2">Primary</button>
      <h5>Button group</h5>
      <div class="btn-group mb-2" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-secondary">Right</button>
      </div>
      <h5>Button block</h5>
      <button class="btn btn-block btn-sm btn-primary d-block mb-2">Primary</button>
      <button class="btn btn-block btn-primary d-block mb-2">Primary</button>
      <button class="btn btn-block btn-lg btn-primary d-block mb-2">Primary</button>
    </div>
  </div>



</div>
@endsection
