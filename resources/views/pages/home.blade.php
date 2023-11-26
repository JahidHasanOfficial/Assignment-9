@extends('layout.master')

@section('title','Home')
@section('content')
<!-- Home Section -->
<section id="home" class="py-5  text-black">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="header-content"> 
          <h1 class="text-center">This is Jahid Hasan</h1>
          <h4 class="text-center">I'm a Diploma Engineer.</h4>
          <p class="text-center">I'm currently learning PHP & Laravel. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
          <div class="contact-links">
						<ul class="list-unstyled d-flex justify-content-end mb-0 justify-content-center">
							<li class="me-3">
								<a target="_blank" href="{{ url('https://www.facebook.com/jahid49hasan') }}"><i class="fa-brands fa-facebook text-white border rounded p-3 bg-info"></i></a>
							</li>
							<li class="me-3">
								<a target="_blank" href="{{url('https://github.com/JahidHasanOfficial')}}"><i class="fa-brands fa-github border text-white rounded p-3 bg-info "></i></a>
							</li>
							<li class="me-3">
								<a target="_blank" href="{{ url('https://www.linkedin.com/in/jahidhasan23/') }}"><i class="fa-brands fa-linkedin text-white border-hover border rounded p-3 bg-info "></i></a>
							</li>
						</ul>
					</div>
        </div>
        
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-4">
        <img src="{{ asset('assets/images/jahid.jpg') }}" class="img-fluid mx-auto d-block home-image" alt="" />
      </div>
    </div>
  </div>
</section>
@endsection