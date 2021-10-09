@extends('layouts.user')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('templates/user')}}/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    </section>

        <section class="ftco-section bg-light" data-section="design">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">See Our Designs</h2>
                    </div>
                </div>
                <div class="row d-flex">
                @foreach ($data as $design)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <img class="block-20" src="{{asset('storage/'.$design->image)}}" alt="">
                            <div class="text mt-3 float-right d-block">
                                <h3 class="heading">{{ $design->name }}</h3>
                                <p class="mb-0"><a href="{{ route('more') }}" class="btn btn-secondary">Read More</span></a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
  </body>
</html>

@endsection
