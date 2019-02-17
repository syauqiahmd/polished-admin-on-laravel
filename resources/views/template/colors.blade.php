@extends('layouts.master')
@section('main-content')
<div class="col-lg-10 col-md-9 p-4 mb-5">
  <div class="row pl-3">
    <div class="col-md-12 pl-3 pt-2">
      <h3>Colors</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 pl-3 pt-2">
      <div class="pl-3">
        <h4>Theme colors</h4>
        <div>
          <ul class="list-unstyled">
            <li class="bg-primary text-light pl-3">primary</li>
            <li class="bg-secondary text-dark pl-3">secondary</li>
            <li class="bg-success text-light pl-3">success</li>
            <li class="bg-warning text-light pl-3">warning</li>
            <li class="bg-info text-light pl-3">info</li>
            <li class="bg-light text-dark pl-3">light</li>
            <li class="bg-dark text-light pl-3">dark</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-6 pl-3 pt-2">
      <div class="pl-3">
        <h4>Background colors classes</h4>
        <div>
          <ul class="list-unstyled">
            <li>Primary Variants</li>
            <li class="bg-primary-lightest text-light pl-3">.bg-primary-lightest</li>
            <li class="bg-primary-lighter text-light pl-3">.bg-primary-lighter</li>
            <li class="bg-primary text-light pl-3">.bg-primary</li>
            <li class="bg-primary-darker text-light pl-3">.bg-primary-darker</li>
            <li class="bg-primary-darkest text-light pl-3">.bg-primary-darkest</li>

            <li>Secondary variants</li>
            <li class="bg-secondary-lightest text-light pl-3">.bg-secondary-lightest</li>
            <li class="bg-secondary-lighter text-light pl-3">.bg-secondary-lighter</li>
            <li class="bg-secondary text-light pl-3">.bg-secondary</li>
            <li class="bg-secondary-darker text-light pl-3">.bg-secondary-darker</li>
            <li class="bg-secondary-darkest text-light pl-3">.bg-secondary-darkest</li>

            <li>Success variants</li>
            <li class="bg-success-lightest text-light pl-3">.bg-success-lightest</li>
            <li class="bg-success-lighter text-light pl-3">.bg-success-lighter</li>
            <li class="bg-success text-light pl-3">.bg-success</li>
            <li class="bg-success-darker text-light pl-3">.bg-success-darker</li>
            <li class="bg-success-darkest text-light pl-3">.bg-success-darkest</li>

            <li>Warning variants</li>
            <li class="bg-warning-lightest text-light pl-3">.bg-warning-lightest</li>
            <li class="bg-warning-lighter text-light pl-3">.bg-warning-lighter</li>
            <li class="bg-warning text-light pl-3">.bg-warning</li>
            <li class="bg-warning-darker text-light pl-3">.bg-warning-darker</li>
            <li class="bg-warning-darkest text-light pl-3">.bg-warning-darkest</li>

            <li>Info variants</li>
            <li class="bg-info-lightest text-light pl-3">.bg-info-lightest</li>
            <li class="bg-info-lighter text-light pl-3">.bg-info-lighter</li>
            <li class="bg-info text-light pl-3">.bg-info</li>
            <li class="bg-info-darker text-light pl-3">.bg-info-darker</li>
            <li class="bg-info-darkest text-light pl-3">.bg-info-darkest</li>

            <li>Light variants</li>
            <li class="bg-light-lightest text-dark pl-3">.bg-light-lightest</li>
            <li class="bg-light-lighter text-dark pl-3">.bg-light-lighter</li>
            <li class="bg-light text-dark pl-3">.bg-light</li>
            <li class="bg-light-darker text-dark pl-3">.bg-light-darker</li>
            <li class="bg-light-darkest text-dark pl-3">.bg-light-darkest</li>

            <li>Dark variants</li>
            <li class="bg-dark-lightest text-light pl-3">.bg-dark-lightest</li>
            <li class="bg-dark-lighter text-light pl-3">.bg-dark-lighter</li>
            <li class="bg-dark text-light pl-3">.bg-dark</li>
            <li class="bg-dark-darker text-light pl-3">.bg-dark-darker</li>
            <li class="bg-dark-darkest text-light pl-3">.bg-dark-darkest</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6 pl-3 pt-2">
      <div class="pl-3">
        <h4>Text colors classes</h4>
        <div>
          <ul class="list-unstyled">
            <li>Text Primary Variants</li>
            <li class="text-primary-lightest  pl-3">.text-primary-lightest</li>
            <li class="text-primary-lighter  pl-3">.text-primary-lighter</li>
            <li class="text-primary  pl-3">.text-primary</li>
            <li class="text-primary-darker  pl-3">.text-primary-darker</li>
            <li class="text-primary-darkest  pl-3">.text-primary-darkest</li>

            <li>Text Secondary Variants</li>
            <li class="text-secondary-lightest  pl-3">.text-secondary-lightest</li>
            <li class="text-secondary-lighter  pl-3">.text-secondary-lighter</li>
            <li class="text-secondary  pl-3">.text-secondary</li>
            <li class="text-secondary-darker  pl-3">.text-secondary-darker</li>
            <li class="text-secondary-darkest  pl-3">.text-secondary-darkest</li>

            <li>Text Success Variants</li>
            <li class="text-success-lightest  pl-3">.text-success-lightest</li>
            <li class="text-success-lighter  pl-3">.text-success-lighter</li>
            <li class="text-success  pl-3">.text-success</li>
            <li class="text-success-darker  pl-3">.text-success-darker</li>
            <li class="text-success-darkest  pl-3">.text-success-darkest</li>

            <li>Text Warning Variants</li>
            <li class="text-warning-lightest  pl-3">.text-warning-lightest</li>
            <li class="text-warning-lighter  pl-3">.text-warning-lighter</li>
            <li class="text-warning  pl-3">.text-warning</li>
            <li class="text-warning-darker  pl-3">.text-warning-darker</li>
            <li class="text-warning-darkest  pl-3">.text-warning-darkest</li>

            <li>Text Info Variants</li>
            <li class="text-info-lightest  pl-3">.text-info-lightest</li>
            <li class="text-info-lighter  pl-3">.text-info-lighter</li>
            <li class="text-info  pl-3">.text-info</li>
            <li class="text-info-darker  pl-3">.text-info-darker</li>
            <li class="text-info-darkest  pl-3">.text-info-darkest</li>

            <li>Text Light Variants</li>
            <li class="text-light-lightest pl-3">.text-light-lightest</li>
            <li class="text-light-lighter pl-3">.text-light-lighter</li>
            <li class="text-light pl-3">.text-light</li>
            <li class="text-light-darker pl-3">.text-light-darker</li>
            <li class="text-light-darkest pl-3">.text-light-darkest</li>

            <li>Text Dark Variants</li>
            <li class="text-dark-lightest  pl-3">.text-dark-lightest</li>
            <li class="text-dark-lighter  pl-3">.text-dark-lighter</li>
            <li class="text-dark  pl-3">.text-dark</li>
            <li class="text-dark-darker  pl-3">.text-dark-darker</li>
            <li class="text-dark-darkest  pl-3">.text-dark-darkest</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-6 pl-3 pt-2">
      <div class="pl-3">
        <h4>Background colors classes</h4>
        <div>
          <ul class="list-unstyled">
            <li>Primary Variants</li>
            <li class="border-primary-lightest border text-dark pl-3">border-primary-lightest</li>
            <li class="border-primary-lighter border text-dark pl-3">border-primary-lighter</li>
            <li class="border-primary border text-dark pl-3">border-primary</li>
            <li class="border-primary-darker border text-dark pl-3">border-primary-darker</li>
            <li class="border-primary-darkest border text-dark pl-3">border-primary-darkest</li>

            <li>Secondary variants</li>
            <li class="border-secondary-lightest border text-dark pl-3">border-secondary-lightest</li>
            <li class="border-secondary-lighter border text-dark pl-3">border-secondary-lighter</li>
            <li class="border-secondary border text-dark pl-3">border-secondary</li>
            <li class="border-secondary-darker border text-dark pl-3">border-secondary-darker</li>
            <li class="border-secondary-darkest border text-dark pl-3">border-secondary-darkest</li>

            <li>Success variants</li>
            <li class="border-success-lightest border text-dark pl-3">border-success-lightest</li>
            <li class="border-success-lighter border text-dark pl-3">border-success-lighter</li>
            <li class="border-success border text-dark pl-3">border-success</li>
            <li class="border-success-darker border text-dark pl-3">border-success-darker</li>
            <li class="border-success-darkest border text-dark pl-3">border-success-darkest</li>

            <li>Warning variants</li>
            <li class="border-warning-lightest border text-dark pl-3">border-warning-lightest</li>
            <li class="border-warning-lighter border text-dark pl-3">border-warning-lighter</li>
            <li class="border-warning border text-dark pl-3">border-warning</li>
            <li class="border-warning-darker border text-dark pl-3">border-warning-darker</li>
            <li class="border-warning-darkest border text-dark pl-3">border-warning-darkest</li>

            <li>Info variants</li>
            <li class="border-info-lightest border text-dark pl-3">border-info-lightest</li>
            <li class="border-info-lighter border text-dark pl-3">border-info-lighter</li>
            <li class="border-info border text-dark pl-3">border-info</li>
            <li class="border-info-darker border text-dark pl-3">border-info-darker</li>
            <li class="border-info-darkest border text-dark pl-3">border-info-darkest</li>

            <li>Light variants</li>
            <li class="border-light-lightest border text-dark pl-3">border-light-lightest</li>
            <li class="border-light-lighter border text-dark pl-3">border-light-lighter</li>
            <li class="border-light border text-dark pl-3">border-light</li>
            <li class="border-light-darker border text-dark pl-3">border-light-darker</li>
            <li class="border-light-darkest border text-dark pl-3">border-light-darkest</li>

            <li>Dark variants</li>
            <li class="border-dark-lightest border text-dark pl-3">border-dark-lightest</li>
            <li class="border-dark-lighter border text-dark pl-3">border-dark-lighter</li>
            <li class="border-dark border text-dark pl-3">border-dark</li>
            <li class="border-dark-darker border text-dark pl-3">border-dark-darker</li>
            <li class="border-dark-darkest border text-dark pl-3">border-dark-darkest</li>
          </ul>
        </div>
      </div>
    </div>

  </div>



</div>
@endsection
