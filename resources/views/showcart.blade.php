<!DOCTYPE html>
<html lang="en">

<head>

    <base href = "/public" />

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Patrick Cafe</title>
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">

    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/owl-carousel.css" rel="stylesheet">

    <link href="assets/css/lightbox.css" rel="stylesheet">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="logo" href="index.html">
                            <img align="klassy cafe html template" src="assets/images/klassy-logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a class="active" href="#top">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a href="https://templatemo.com" rel="sponsored" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section"><img src = "{{ asset('assets/images/cart.png') }}"
                                    width="20"></li>

                            <li class="scroll-to-section">

                                @auth
                                    <a href = "{{ url('/showcart', Auth::user()->id) }}">
                                        <div>
                                            Cart[{{ $count }}]
                                        </div>
                                    </a>
                                @endauth

                                @guest

                                    Cart[0]
                                @endguest
                                </a>
                            </li>

                            <li>
                                @if (Route::has('login'))
                                    <div class="z-10 p-6 text-right sm:fixed sm:right-0 sm:top-0">
                                        @auth
                                <li>
                                    <x-app-layout>

                                    </x-app-layout>
                                </li>
                            @else
                                <li>
                                    <a class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                                        href="{{ route('login') }}">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500"
                                            href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                </div>
                @endif


                </ul>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>

    <div id = "top">
        <table align="center">
            <tr>
                <th style = "padding: 30px; ">Food Name</th>
                <th style = "padding: 30px; ">Price</th>
                <th style = "padding: 30px; ">Quantity</th>
                <th style = "padding: 30px; ">Action</th>

            </tr>

            <form action = "{{ url('orderconfirm') }}" method = "POST">
                @csrf
                @foreach ($data as $data)
                    <tr align = "center">

                        <td>
                            <input {{ $data->title }} hidden name = "foodname[]" type = "text"
                                value = "{{ $data->title }}">
                            {{ $data->title }}

                        <td>
                            <input {{ $data->price }} hidden name = "price[]" type = "text"
                                value = "{{ $data->price }}">
                            {{ $data->price }}
                        </td>

                        <td>
                            <input {{ $data->quantity }} hidden name = "quantity[]" type = "text"
                                value = "{{ $data->quantity }}">
                            {{ $data->quantity }}
                        </td>

                    </tr>
                @endforeach

                @foreach ($data2 as $data2)
                    <tr style = "position: relative; top: -76px; right: -390px; color: red;">
                        <td><a class = "" href = "{{ url('/remove', $data2->id) }}">Remove</a></td>

                    </tr>
                @endforeach

        </table>

        <div align = "center" style = "padding: 10px">

            <button class = "btn btn-warning" id = "order" type = "button">Order Now</button>

        </div>

        <div align = "center" id = "appear" style="padding: 10px; display: none">

            <div style="padding: 10px">
                <label>Name</label>
                <input name = "name" placeholder="name" type = "text" />
            </div>

            <div style="padding: 10px">
                <label>Phone</label>
                <input name = "phone" placeholder="Phone Number" type = "number" />
            </div>

            <div style="padding: 10px">
                <label>Address</label>
                <input name = "address" placeholder="Address" type = "text" />
            </div>

            <div style="padding: 10px">

                <input class = "btn btn-success" style = "color: black" type = "Submit" value = "Order Confirm" />

                <button class = "btn btn-danger" id = "close" style = "color: black"
                    type = "button">Close</button>
            </div>

        </div>


    </div>

    </form>


    <script type="text/javascript">
        $("#order").click(

            function() {
                $("#appear").show();
            }

        );

        $("#close").click(

            function() {
                $("#appear").hide();
            }

        );
    </script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
