@extends('layouts.master')
@section('main-content')
<div class="col-lg-10 col-md-9 pt-4 pl-3 pb-5 mb-4">

  <div class="row pl-3 pt-2 mb-4">
    <div class="col-12">
      <h3>Widgets / UI</h3>
    </div>
  </div>


  <!-- INFO BOX -->
  <div class="row pl-3 pt-2">

    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-light rounded text-primary ">
        <span class="oi top-0 rounded-left bg-primary text-light h-100 p-4 oi-chat fs-5"></span>
        <div class="media-body p-2">
          <h6 class="media-title m-0">Messages</h6>
          <div class="media-text">
            <h3>540</h3>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-primary rounded text-light">
        <span class="oi top-0 rounded-left oi-bookmark h-100 bg-primary text-light p-4 fs-5"></span>
        <div class="media-body p-2">
          <h6 class="media-title m-0">Bookmark</h6>
          <div class="media-text">
            <h3>540</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-danger rounded text-light">
        <div class="media-body p-2 text-right">
          <h6 class="media-title m-0">Add to Cart</h6>
          <div class="media-text">
            <h3>540</h3>
          </div>
        </div>
        <span class="oi top-0 rounded-right oi-cart h-100 bg-light text-danger p-4 fs-5"></span>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-primary rounded text-light">
        <span class="oi top-0 rounded-left oi-star h-100 bg-light text-primary p-4 fs-5"></span>
        <div class="media-body p-2">
          <h6 class="media-title m-0">Favorites</h6>
          <div class="media-text">
            <h3>540</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END INFO BOX -->


  <!-- INFO BOX WITH PROGRESS -->
  <div class="row my-2 pt-3 pl-3">
    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-primary-lighter rounded text-indigo">
        <span class="oi top-0 rounded-left bg-primary text-light h-100 p-4 oi-chat fs-5"></span>
        <div class="media-body p-2 text-light">
          <h6 class="media-title m-0">Messages</h6>
          <div class="progress mt-1 bg-primary">
            <div class="progress-bar w-25 bg-light" role="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <small>25% increased</small>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-danger-lighter rounded text-danger">
        <span class="oi top-0 rounded-left bg-danger text-light h-100 p-4 oi-cart fs-5"></span>
        <div class="media-body p-2 text-light">
          <h6 class="media-title m-0">Add to Cart</h6>
          <div class="progress mt-1 bg-danger">
            <div class="progress-bar w-75 bg-light" role="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <small>75% increased</small>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-success-lighter rounded text-success">
        <div class="media-body p-2 text-light text-left">
          <h6 class="media-title m-0">Bookmark</h6>
          <div class="progress mt-1 bg-success">
            <div class="progress-bar bg-light" style="width: 44%" role="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <small>44% increased</small>
        </div>
        <span class="oi top-0 rounded-right bg-success text-light h-100 p-4 oi-bookmark fs-5"></span>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
      <div class="media shadow-sm p-0 bg-dark-lighter rounded text-dark">
        <span class="oi top-0 rounded-left bg-dark text-light h-100 p-4 oi-box fs-5"></span>
        <div class="media-body p-2 text-light">
          <h6 class="media-title m-0">Purchases</h6>
          <div class="progress mt-1 bg-dark">
            <div class="progress-bar bg-light" style="width: 89%" role="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
          <small>89% increased</small>
        </div>
      </div>
    </div>
  </div>
  <!-- END INFO BOX WITH PROGRESS -->


  <!-- START INFO BOX WITH MORE INFO -->
  <div class="row my-2 pl-3 pt-2">

    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-0 shadow-sm bg-danger text-light">
        <div class="card-body">
          <div class="media">
            <div class="media-body">
              <h2 class="fw-bold">150</h2>
              <h6>New orders</h6>
            </div>
            <span class="oi oi-chat p-2 fs-9 text-danger-lighter"></span>
          </div>
        </div>
        <div class="card-footer border-0 text-center p-1 bg-danger-lighter">
          <a href="#" class="text-light">
            More info <span class="oi oi-arrow-circle-right"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-0 shadow-sm bg-secondary text-dark">
        <div class="card-body">
          <div class="media">
            <div class="media-body">
              <h2 class="fw-bold">150</h2>
              <h6>Abandon carts</h6>
            </div>
            <span class="oi oi-bar-chart p-2 fs-9 text-dark-lighter"></span>
          </div>
        </div>
        <div class="card-footer border-0 text-center p-1 bg-dark-lighter">
          <a href="#" class="text-secondary">
            More info <span class="oi oi-arrow-circle-right"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-0 shadow-sm bg-primary text-light">
        <div class="card-body">
          <div class="media">
            <div class="media-body">
              <h2 class="fw-bold">150</h2>
              <h6>Purchase</h6>
            </div>
            <span class="oi oi-basket p-2 fs-9 text-indigo-lighter"></span>
          </div>
        </div>
        <div class="card-footer border-0 text-center p-1 bg-primary-lighter">
          <a href="#" class="text-light">
            More info <span class="oi oi-arrow-circle-right"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-0 shadow-sm bg-warning text-primary">
        <div class="card-body">
          <div class="media">
            <div class="media-body">
              <h2 class="fw-bold">150</h2>
              <h6>Purchase</h6>
            </div>
            <span class="oi oi-basket p-2 fs-9 text-primary-lighter"></span>
          </div>
        </div>
        <div class="card-footer border-0 text-center p-1 bg-warning-lighter">
          <a href="#" class="text-primary">
            More info <span class="oi oi-arrow-circle-right"></span>
          </a>
        </div>
      </div>
    </div>


  </div>
  <!-- END INFO BOX WITH MORE INFO -->

  <!-- COLLAPSIBLE CARD -->
  <div class="row pl-3 pt-2">
    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-indigo text-light shadow-sm">
        <div class="card-header bg-primary">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-1">
            Collapsible
          </span>
        </div>
        <div class="collapse show" id="collapsible-card-1">
          <div class="card-body bg-primary-lighter">
            click the collapsible text above to collapse me.
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="alert p-0 alert-warning bg-warning border-warning alert-dismissible fade show" role="alert">
        <div class="card m-0 bg-transparent text-light border-0">
          <div class="card-header">
            <span>Dismissable</span>
            <button type="button" class="close pr-2 pt-2" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="card-body bg-light text-dark">
            Dismiss this card by clicking close icon
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-secondary text-dark shadow-sm">
        <div class="card-header bg-secondary">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-2">
            Expandable
          </span>
        </div>
        <div class="collapse" id="collapsible-card-2">
          <div class="card-body bg-secondary-lighter">
            Woooow you expand me. Great job!
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-secondary text-light shadow-sm">
        <div class="card-header bg-secondary">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-2">
            Loading State
          </span>
        </div>
        <div class="collapse show" id="collapsible-card-2">
          <div class="card-body bg-white text-dark rounded-bottom">
            Woooow you expand me. Great job!
          </div>
        </div>
        <div class="card-overlay bg-white m-0 p-3 text-dark text-center rounded position-absolute h-100 w-100 o-75">
          <span class="oi oi-loop-circular mt-4 fs-9 spin"></span>
        </div>
      </div>
    </div>


  </div>
  <!-- END COLLAPSIBLE CARD -->



  <!-- COLLAPSIBLE CARD -->
  <div class="row pl-3 pt-2">
    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-light border-0 text-indigo shadow-sm">
        <div class="card-header bg-white">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-3">
            Collapsible
          </span>
        </div>
        <div class="collapse show" id="collapsible-card-3">
          <div class="card-body bg-white">
            click the collapsible text above to collapse me.
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="alert p-0 alert-white border-0 bg-white border-white alert-dismissible fade show" role="alert">
        <div class="card m-0 text-dark border-0">
          <div class="card-header bg-white">
            <span>Dismissable</span>
            <button type="button" class="close pr-2 pt-2" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="card-body bg-white text-dark">
            Dismiss this card by clicking close icon
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-white text-dark border-0 shadow-sm">
        <div class="card-header bg-white">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-4">
            Expandable
          </span>
        </div>
        <div class="collapse" id="collapsible-card-4">
          <div class="card-body bg-white">
            Woooow you expand me. Great job!
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-2 col-sm-6">
      <div class="card border-white border-0 text-light shadow-sm">
        <div class="card-header text-dark bg-white">
          <span class="btn p-0" data-toggle="collapse" data-target="#collapsible-card-2">
            Loading State
          </span>
        </div>
        <div class="collapse show" id="collapsible-card-2">
          <div class="card-body bg-white text-dark rounded-bottom">
            Woooow you expand me. Great job!
          </div>
        </div>
        <div class="card-overlay bg-white m-0 p-3 text-dark text-center rounded position-absolute h-100 w-100 o-75">
          <span class="oi oi-loop-circular mt-4 fs-9 spin"></span>
        </div>
      </div>
    </div>


  </div>
  <!-- END COLLAPSIBLE CARD -->


  <!-- START PROFILE CARDS -->
  <div class="row pl-3 pt-2">
    <div class="col-lg-4 col-md-12 mb-2">
      <div class="card shadow-sm">
        <div class="card-header d-flex bg-primary border-0">
          <img class="w-25 h-25 rounded-circle" src="assets/azamuddin.jpg" alt="user">
          <div class="text-light ml-4">
            <h5 class="m-0">Muhammad Azamuddin</h5>
            <small>Lead Developer</small>
          </div>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <span>Projects</span>
              <a href="#" class="mt-1 float-right badge badge-primary">43</a>
            </li>
            <li class="list-group-item">
              Tasks

              <a href="#" class="mt-1 float-right badge badge-info">20</a>
            </li>
            <li class="list-group-item">
              Completed Projects
              <a href="#" class="mt-1 float-right badge badge-success">17</a>
            </li>
            <li class="list-group-item">
              Followers
              <a href="#" class="mt-1 float-right badge badge-warning text-white">1239</a>
            </li>
          </ul>
        </div>
      </div>
    </div>


    <div class="col-md-12 col-lg-4 mb-2">
      <div class="card">
        <div class="card-header bg-info text-center text-light border-0">
          <div class="text-left w-100">
            <h5 class="m-0">Sammy Dean</h5>
            <small>Graphic Designer</small>
          </div>
          <img class="w-25 h-25 clearfix rounded-circle border border-white" style="border-width: 3px !important;margin-bottom: -3rem;clear: both;"
            src="assets/azamuddin.jpg" alt="users">
        </div>
        <div class="card-body text-center d-flex flex-row justify-content-between pt-4 mt-4">
          <div class="col text-align border-right">
            <h6 class="fw-bold m-0">3.200</h6>
            <small>SALES</small>
          </div>
          <div class="col text-align border-right">
            <h6 class="fw-bold m-0">13.000</h6>
            <small>FOLLOWERS</small>
          </div>
          <div class="col text-align">
            <h6 class="fw-bold m-0">35</h6>
            <small>PRODUCTS</small>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12 col-lg-4 mb-2">
      <div class="card">
        <div class="card-header bg-info text-center text-light border-0" style="background-image: url(assets/matthieu-a-262686-unsplash.jpg); background-size: 100%">
          <div class="text-left w-100">
            <h5 class="m-0">Ahmad Jauhan</h5>
            <small>Photo Editor</small>
          </div>
          <img class="w-25 h-25 clearfix rounded-circle border border-white" style="border-width: 3px !important;margin-bottom: -3rem;clear: both;"
            src="assets/azamuddin.jpg" alt="users">
        </div>
        <div class="card-body text-center d-flex flex-row justify-content-between pt-4 mt-4">
          <div class="col text-align border-right">
            <h6 class="fw-bold m-0">3.200</h6>
            <small>SALES</small>
          </div>
          <div class="col text-align border-right">
            <h6 class="fw-bold m-0">13.000</h6>
            <small>FOLLOWERS</small>
          </div>
          <div class="col text-align">
            <h6 class="fw-bold m-0">35</h6>
            <small>PRODUCTS</small>
          </div>
        </div>
      </div>
    </div>



  </div>
  <!-- END PROFILE CARDS -->

  <!-- POST CARDS -->

  <div class="row pt-2 pl-3">
    <div class="col-sm-6 mb-2">
      <div class="card bg-white border-0 shadow-sm">
        <div class="card-header bg-white border-light">
          <div class="media">
            <img style="width: 48px" class="mr-3 rounded-circle" src="assets/azamuddin.jpg" alt="azamuddin">
            <div class="media-body">
              <h6 class="text-indigo m-0">Muhammad Azamuddin</h6>
              <small class="text-muted">Shared publicly - 7:30PM Today</small>
            </div>
          </div>
        </div>
        <div class="card-body">
          <img class="w-100 mb-2" src="assets/matthieu-a-262686-unsplash.jpg" alt="image post">
          <p class="fs-smaller">
            Amazing isn't it?
          </p>
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn btn-sm border-secondary text-muted">
                <span class="oi oi-share"></span>
                Share
              </button>
              <button class="btn btn-sm border-secondary text-muted">
                <span class="oi oi-heart"></span>
                Like
              </button>
            </div>
            <div>
              <span class="fs-smaller text-muted">139 Likes - 5 Comments</span>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Iqbal Kholis <small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Habib Asagaf <small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Ridwan Mutafaq <small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-sm-6 mb-2">
      <div class="card bg-white border-0 shadow-sm">
        <div class="card-header bg-white border-light">
          <div class="media">
            <img style="width: 48px" class="mr-3 rounded-circle" src="assets/azamuddin.jpg" alt="azamuddin">
            <div class="media-body">
              <h6 class="text-indigo m-0">Muhammad Azamuddin</h6>
              <small class="text-muted">Shared publicly - 7:30PM Today</small>
            </div>
          </div>
        </div>
        <div class="card-body">
          <p class="fs-smaller">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia possimus minus nulla in quae, itaque quis
            laborum quidem dolore sint earum quisquam rem nemo vero sequi eum magnam alias? Cum!
          </p>
          <div class="media bg-light mb-2 p-2">
            <img class="w-25 mr-3" src="https://adminlte.io/themes/AdminLTE/dist/img/photo1.png" alt="">
            <div class="media-body">
              <h6>Lorem ipsum dolor sit amet</h6>
              <p class="text-dark fs-smaller">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nulla facilis quod eius reprehenderit
                temporibus laborum fuga...
                <a href="#">more</a>
              </p>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn btn-sm border-secondary text-muted">
                <span class="oi oi-share"></span>
                Share
              </button>
              <button class="btn btn-sm border-secondary text-muted">
                <span class="oi oi-heart"></span>
                Like
              </button>
            </div>
            <div>
              <span class="fs-smaller text-muted">139 Likes - 5 Comments</span>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Iqbal Fawzan<small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Adi Lukmanul <small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded-circle" style="width: 48px" src="assets/azamuddin.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h6>Akhmad Akhsanul <small class="float-right">9:08 PM Today</small> </h6>
                <p class="fs-smallest text-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                  scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</ps>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- END POST CARDS -->

  <div class="row mb-5 pl-3">
    <div class="col-md-12">
      <div>Credits:</div>
      Photo by Matthieu A on Unsplash
    </div>
  </div>













</div>
@endsection
