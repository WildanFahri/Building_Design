@extends('layouts.user')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('templates/user')}}/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    </section>

    <section>
        <section class="portfolio-area area-padding fix" id="design" >
            <div class="container">
                <div class="row justify-content-center mb-5 pb-5">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <br><br>
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
                                    <p class="mb-0"><a href="{{ route('design.show',$design->id) }}" class="btn btn-secondary">Read More</span></a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                {{-- <div class="row awesome-project-content">
                    @foreach ($data as $design)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img class="block-20" src="{{asset('storage/'.$design->image)}}" alt=" " id="img{{ $design->id }}"/></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <div class="venobox">
                                                <div class="flex-row">
                                                    <div class="flex-container">
                                                        <div class="flex-item-left">
                                                            <img src="https://placeimg.com/640/480/any" class="flex-img" alt="">
                                                        </div>
                                                        <div class="flex-item-right">
                                                            <h1>Nama</h1>
                                                            <h1>Hello</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="venobox" href="{{asset('storage/'.$design->image)}}" alt="{{ $design->description }}">
                                                <h4>{{ $design->name }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>  --}}
                {{-- <div class="row awesome-project-content">
                @foreach ($data as $design)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <img id="designImg{{ $design->id }} myImages" src="{{asset('storage/'.$design->image)}}" alt="{{ $design->description }}" style="width:100%;max-width:350px"  onclick="bukaGambar({{ $design->id }})">
                                <!-- The Modal -->
                                <div id="modalImg{{ $design->id }} " class="modal modalGambar">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img{{ $design->id }}">
                                    <div class="caption"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <script>
                // Get the modal

                function bukaGambar(id) {
                    var modalGambar = document.getElementsByClassName("modalGambar");
                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var images = document.getElementById("designImg"+id);
                    var modalImg = document.getElementById("img"+id);
                    // var captionText = document.getElementById("caption");
                    // console.log(id)
                    // images.onclick = function(){
                        modalGambar.style.display = "block";
                        modalImg.src = this.src;
                        // captionText.innerHTML = this.alt;
                    // }

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                    modalGambar.style.display = "none";
                    }
                }
                </script>
                </div>
            </div> --}}
            <br><br>
        </section>
    </section>

  </body>
</html>

@endsection
