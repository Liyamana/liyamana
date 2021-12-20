@extends('frontend.layouts.app_landing')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="sidebar-left pr-4" style="padding-top: 30px;">

                    <div class="container">
                        <!-- Search widget-->



                        <!-- Categories widget-->
                        <aside class="widget widget-categories">

                            <ul>
                                <li><a href="#">Sent Letters <span class="float-right">112</span></a></li>
                                <li><a href="#">My Post Box <span class="float-right">86</span></a></li>
                                <li><a href="#">My Profile <span class="float-right">10</span></a></li>
                                <li><a href="#">Favorite Design <span class="float-right">144</span></a></li>
                                <li><a href="#">Purchased Design <span class="float-right">18</span></a></li>
                            </ul>
                        </aside>

                        <!-- Recent entries widget-->

                        <!-- Subscribe widget-->
                        <aside class="widget widget-categories">
                            <div class="widget-title">
                                <h6>Liyamana Devlopers</h6>
                            </div>
                            <p>Enter your email address below to subscribe to my newsletter</p>
                            <form action="#" method="post" class="d-none d-md-block d-lg-block">
                                <input type="text" class="form-control input" id="email-footer" name="email" placeholder="info@yourdomain.com">
                                <button type="submit" class="btn primary-solid-btn btn-block btn-not-rounded mt-3">Subscribe</button>
                            </form>
                        </aside>
                    </div>


                </div>
            </div>
            <div class="col-lg-8 col-md-8">

                <!-- Post-->

                <!-- Page Navigation end-->
            </div>
        </div>
    </div>
@endsection
