@extends('frontend.layouts.app_landing')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <style>
        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div class="main" style="background-color: #f4f4f4;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <textarea id="mytextarea" >
                  <h2>Down the Rabbit-Hole</h2>
                  <p>Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”</p>
                  <p>So she was considering in her own mind (as well as she could, for the hot day made her feel very sleepy and stupid), whether the pleasure of making a daisy-chain would be worth the trouble of getting up and picking the daisies, when suddenly a White Rabbit with pink eyes ran close by her.</p>
               </textarea>
                </div>
                <div class="col-md-2" style="background: white;">
                    <div class="sidebar-left pr-4" style="padding-top: 30px;">
                        <div class="">
                            <aside class="widget widget-categories">
                                <ul>
                                    <li><a href="#">Sent Letters</a></li>
                                    <li><a href="#">My Post Box</a></li>
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Favorite Design</a></li>
                                    <li><a href="#">Purchased Design</a></li>
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
            </div>
        </div>
    </div>
    @include('frontend.dialog.letter_wizard')




    <script>
        $(window).on('load', function() {
            $('#start_modal').modal('show');
        });


    </script>

    <script src='https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5/tinymce.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        tinymce.init({
            selector: "#mytextarea",
            plugins: "print link image lists advlist wordcount",
            toolbar:
                "undo redo print | styleselect | fontselect fontsizeselect bold italics underline | forecolor backcolor | link image | alignleft aligncenter alignright alignjustify |lineheight | numlist bullist indent outdent | removeformat",
            content_css: "document",
            skin: "material-classic",
            icons: "material",
            height: 580
        });
    </script>

@endsection
