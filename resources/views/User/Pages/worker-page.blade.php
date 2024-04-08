@extends('User.layout.main')


@section('content')
    @if (session('success'))
        <div>
            <script>
                notyf() -
                    >
                    position('x', 'center') -
                    >
                    position('y', 'top') -
                    >
                    addError('There was a problem re-activating your account.');
            </script>
        </div>
    @endif
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">Workers</h3>
                <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span>all workers</p>

                <ul class="nav navbar-nav">
                    {{-- <li><a href="">Impedit</a></li> --}}
                    <li><a href="" class="active">All</a></li>
                    <li><a href="">Latest</a></li>
                    <li><a href="">Top</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                {{-- <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
            <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Banyumas</h3>
            <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
          </div> --}}
                <div class="col-md-6 col-sm-6">
                    <div class="wheather">
                        <div class="stormy rainy animated pulse infinite">
                            <div class="shadow">
                            </div>
                        </div>
                        <div class="sub-wheather">
                            <div class="thunder">

                            </div>
                            <div class="rain">
                                <div class="droplet droplet1"></div>
                                <div class="droplet droplet2"></div>
                                <div class="droplet droplet3"></div>
                                <div class="droplet droplet4"></div>
                                <div class="droplet droplet5"></div>
                                <div class="droplet droplet6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="padding:20px;">
        <div class="col-md-12">
            <div class="row">
                {{-- <div class="col-sm-6 col-md-3 product-grid">
                <div class="thumbnail">
                  <div class="product-location">
                    <span class="fa-map-marker fa"></span> Banyumas
                    </div>
                  <div class="product-price product-price-bottom">
                    <h4>$1,716</h4>
                  </div>
                  <img src="holder.js/250x250" alt="...">
                  <div class="caption">
                    <small>Category</small>
                    <small class="pull-right">
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star-half fa"></span>
                    </small>
                    <h4>Product Name</h4>
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
                  </div>
                </div>
              </div> --}}
                {{-- <div class="col-sm-6 col-md-3 product-grid">
                <div class="thumbnail">
                  <div class="product-price product-price-top">
                    <h4>$1,716</h4>
                  </div>
                  <img src="holder.js/250x250" alt="...">
                  <div class="caption">
                    <small>Category</small>
                    <small class="pull-right">
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star-half fa"></span>
                    </small>
                    <h4>Product Name</h4>
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                    <p><a href="#" class="btn btn-danger" role="button">Buy</a></p>
                  </div>
                </div>
              </div>
               <div class="col-sm-6 col-md-3 product-grid">
                <div class="col-md-12 product-location">
                    <span class="pull-right"><span class="fa-map-marker fa"></span> Banyumas</span>
                </div>
                <div class="thumbnail">
                  <div class="product-price product-price-bottom">
                    <h4>$1,716</h4>
                  </div>
                  <img src="holder.js/250x250" alt="...">
                  <div class="caption">
                    <small>Category</small>
                    <small class="pull-right">
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star-half fa"></span>
                    </small>
                    <h4>Product Name</h4>
                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                    <p><a href="#" class="btn btn-success" role="button">Buy</a></p>
                  </div>
                </div>
              </div> --}}
                @foreach ($users as $user)
                    <div class="col-sm-6 col-md-3 product-grid">
                        {{-- <div class="col-md-12 product-location">
                    <span class="pull-right">
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star fa"></span>
                      <span class="rate fa-star-half fa"></span>
                    </span>
                </div> --}}
                        <div class="thumbnail">
                            {{-- <div class="product-price product-price-bottom">
                    <h4>$1,716</h4>
                  </div> --}}
                            <img class="w-8" src="{{ asset('images/profile/' . $user->profile_image) }}" alt="..."
                                style="max-width: 100px; object-fit: fill;">


                            <div class="caption">
                                <small>{{ $user->role }}</small>
                                <small class="pull-right">
                                    <span><span class="pull-left">
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star fa"></span>
                                            <span class="rate fa-star-half fa"></span>
                                        </span></span>
                                </small>
                                <h4>{{ $user->name }}</h4>
                                <p>{{ $user->email }}</p>
                                <p><a href="{{ route('user.contact.form', ['id' => $user->id]) }}" class="btn btn-info"
                                        role="button">Contact</a></p>
                                <p><a href="{{ route('user.profile', ['id' => $user->id]) }}" class="btn btn-info" role="button">View</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
