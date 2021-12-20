@extends('frontend.layouts.app_landing')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <div class="main">
        <!--hero section start-->
        <div class="main" style="background-color: #f4f4f4;">
            <div class="container">
                <div class="row">

                    <div class="col-md-2" style="background: white;">
                        <div class="sidebar-left pr-4" style="padding-top: 30px;">
                            <div class="">
                                <aside class="widget widget-categories">
                                    <ul>
                                        <li><a href="#">Greeting Letters</a></li>
                                        <li><a href="#">Romantic</a></li>
                                        <li><a href="#">New Year Wishes</a></li>
                                        <li><a href="#">Halloween Cards</a></li>
                                        <li><a href="#">Invitation Letters</a></li>
                                        <li><a href="#">Professional Letters</a></li>
                                        <li><a href="#">Wedding Wish</a></li>
                                        <li><a href="#">New Born Wish</a></li>
                                        <li><a href="#">Visak Card</a></li>
                                        <li><a href="#">Deepawali Cards</a></li>
                                        <li><a href="#">Awurudu Calenders</a></li>
                                        <li><a href="#">Poem Panel</a></li>
                                    </ul>
                                </aside>

                                <!-- Recent entries widget-->

                                <!-- Subscribe widget-->
                                <aside class="widget widget-categories">
                                    <div class="widget-title">
                                        <h6>Liyamana Devlopers</h6>
                                    </div>
                                    <p>Enter your email address below to subscribe to my newsletter</p>
                                    <button class="btn primary-solid-btn btn-block btn-not-rounded mt-3"  data-toggle="modal" data-target=".bd-example-modal-lg">Sent Email</button>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="swiper mySwiper" style="height: 280px;margin-top: 20px;">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" style="background-image: url('{{url('dummy_data/pav1.jpg')}}');background-size: cover;background-repeat: no-repeat;background-position: center; ">
                                    <div style=""></div>
                                </div>
                                <div class="swiper-slide" style="background-image: url('{{url('dummy_data/pav2.jpg')}}');background-size: cover;background-repeat: no-repeat;background-position: center;"></div>
x
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/dummy.jpg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="{{route('frontend.explorer.show_template','birth_day_wish')}}" class="btn btn-primary" style="font-size: 12px;">Get Start</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/p2.jpg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="btn btn-primary" style="font-size: 12px;">Inquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/p3.jpg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="btn btn-primary" style="font-size: 12px;">Inquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/p1.jpeg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="btn btn-primary" style="font-size: 12px;">Inquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/p3.jpg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="btn btn-primary" style="font-size: 12px;">Inquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 style="text-align: center;padding-bottom: 5px">Birth Day Wishluck</h5>
                                        <div style="background-image: url('{{url('dummy_data/dummy.jpg')}}');height: 195px;background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                                        <br>
                                        <p style="font-size: 12px;overflow: hidden;text-overflow: ellipsis;height: 62px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend, lorem vitae suscipit semper, nisl nisl aliquam lacus, ut suscipit dui ipsum vel libero. Nulla mattis magna massa, sit amet mollis mi dignissim a. Vestibulum vehicula gravida aliquet. Sed placerat, lacus consectetur egestas</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>$1.00</h4>
                                            </div>
                                            <div class="col-md-6" style="text-align: right;">
                                                <a href="" class="btn btn-primary" style="font-size: 12px;">Inquiry</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
