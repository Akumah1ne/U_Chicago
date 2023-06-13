@extends('layout.layout')
@section('content')
    <div>
        <img src="{{ asset('web/images/u_chicago.png') }}" class="w-100" height="500px" alt="">
        <div class="danger">
            <div class="container">
                <div class="row justify-content-center py-3">
                    <button class="button">LEARN HOW TO APPLY</button>
                    <button class="button">CONTACT US</button>
                    <button class="button">VISIT OUR CAMPUS</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h3>LATEST NEWS</h3>
            <hr class="dots">
        </div>
        <div class="row mx-3 my-5">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div>
                    <img src="{{ asset('web/images/u_chicago.png') }}" class="w-100" height="120px" alt="">
                </div>
                <div class="news text-white">
                    <p>Convocation celebrates ‘minds that shape the world’ and the power of ideas <i
                            class="fa-solid fa-link"></i></p>
                    <small>Source: Uchicago News</small>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div>
                    <img src="{{ asset('web/images/u_chicago.png') }}" class="w-100" height="120px" alt="">
                </div>
                <div class="news text-white">
                    <p>Convocation celebrates ‘minds that shape the world’ and the power of ideas <i
                            class="fa-solid fa-link"></i></p>
                    <small>Source: Uchicago News</small>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div>
                    <img src="{{ asset('web/images/u_chicago.png') }}" class="w-100" height="120px" alt="">
                </div>
                <div class="news text-white">
                    <p>Convocation celebrates ‘minds that shape the world’ and the power of ideas <i
                            class="fa-solid fa-link"></i></p>
                    <small>Source: Uchicago News</small>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div>
                    <img src="{{ asset('web/images/u_chicago.png') }}" class="w-100" height="120px" alt="">
                </div>
                <div class="news text-white">
                    <p>Convocation celebrates ‘minds that shape the world’ and the power of ideas <i
                            class="fa-solid fa-link"></i></p>
                    <small>Source: Uchicago News</small>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <button class="n-button">SEE MORE NEWS</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="mb-5 mx-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                    <img src="{{ asset('web/images/campus.png') }}" class="w-100" alt="">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                    <div class="background">
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.oluptate dolo?</h2>
                        <h6><a href="" class="text-white">EXPLORE THE DAY TOMORROW BEGAN <i
                                    class="fa-solid fa-arrow-right"></i></a></h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                    <div class="my-5 float-right w-75">
                        <h5>We value rigorous inquiry</h5>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                    <div class="my-5 w-75 px-5">
                        <h6><small>A diversity of people and ideas, coupled with free and open discourse, lays the
                                foundation for students and scholars to bring forth original ideas that define fields and
                                enrich human life.</small></h6>
                        <big><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></big>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-theme mb-5">
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
    </div>

    <div class="gray py-5">
        <div class="text-center">
            <h3>WE FOSTER INDEPENDENT THINKING</h3>
            <hr class="dots">
        </div>
        <div class="container">
            <div class="row mx-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="250px" alt="">
                    </div>
                    <div class="bg-white p-2">
                        <h5>Transformative Information</h5>
                        <small>UChicago students develop the habits of mind and intellectual skills needed to confront
                            complex challenges.</small>
                        <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="250px" alt="">
                    </div>
                    <div class="bg-white p-2">
                        <h5>Field-defining Research</h5>
                        <small>UChicago students develop the habits of mind and intellectual skills needed to confront
                            complex challenges.</small>
                        <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="text-center">
            <h3>WE ADVANCE IDEAS AND HUMANITY</h3>
            <hr class="dots">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="250px" alt="">
                    </div>
                    <div class="gray p-2">
                        <h5>Intellectual Freedom</h5>
                        <small>UChicago students develop the habits of mind and intellectual skills needed to confront
                            complex challenges.</small>
                        <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="250px" alt="">
                    </div>
                    <div class="gray p-2">
                        <h5>Community Impact</h5>
                        <small>UChicago students develop the habits of mind and intellectual skills needed to confront
                            complex challenges.</small>
                        <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="250px" alt="">
                    </div>
                    <div class="gray p-2">
                        <h5>Global Impact</h5>
                        <small>UChicago students develop the habits of mind and intellectual skills needed to confront
                            complex challenges.</small>
                        <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                    class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="gray p-5">
                    <h5>We welcome all</h5>
                    <small>Only when different values, experiences, and perspectives are met with free and open discourse
                        can education be truly transformative. This is why we continue to work together as an institution,
                        and within our community, to promote a more inclusive environment on our campus and beyond.</small>
                    <p class="mt-3"><a href="#" class="text-danger">LEARN MORE <i
                                class="fa-solid fa-arrow-right"></i></a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <img src="{{ asset('web/images/campus.png') }}" class="w-100" height="290px" alt="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                <div class="my-5 float-right w-75">
                    <h5>We call Chicago home</h5>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 p-0">
                <div class="my-5 w-75 px-5">
                    <h6><small>
                            Chicago is not only in our name, it’s woven into the fabric of this institution. Located in the
                            Hyde Park neighborhood, we benefit from the diversity, arts, and vibrant culture of our South
                            Side community.</small></h6>
                    <big><a href="#" class="text-danger">LEARN MORE <i
                                class="fa-solid fa-arrow-right"></i></a></big>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-two owl-theme mb-5">
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
        <div class="item p-1">
            <img src="{{ asset('web/images/carbon.png') }}" class="w-100" alt="">
        </div>
    </div>
    <div class="container-fluid">
        <div class="text-center">
            <h3>EVENTS</h3>
            <hr class="dots">
        </div>
        <div class="row mx-3 my-5">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="text-center border border-dark pt-2 pb-4 px-4 my-2">
                    <div class="">
                        <b>
                            <h4>JUN <br>13</h4>
                        </b>
                        <hr class="dots">
                    </div>
                    <div class="text-white">
                        <a href="" class="text-danger">Community Dance with Sadira Muhammad</a>
                        <h4><small>
                                6:30 pm - 8:30 pm
                                Arts Incubator, Washington Park</small></h4>
                        <a href="" class="text-danger">Add to Calendar (iCal)</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <button class="n-button">SEE MORE EVENTS</button>
        </div>
    </div>
@endsection
