<!DOCTYPE html>
<html lang="en">
<head>
    <title>Goal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files-->
    <link href="{{asset('bootstrap4/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet" media="all">

    <link href="{{asset('frontend/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href='{{asset('frontend/css/simplelightbox.css')}}' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("frontend/css/flexslider.css")}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset("frontend/css/jquery.flipster.css")}}">
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/assignlayout.css')}}" type="text/css" rel="stylesheet" media="all"
          xmlns:v-bind="http://www.w3.org/1999/xhtml">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="{{asset('bootstrap4/js/bootstrap.js')}}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- //js -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- //web-fonts -->
</head>
<body>
<!-- Friends
<nav class="sidebar sidebar-offcanvas" id="sidebar">

    <div id = 'toggle-sidebar' class="trapezoid" onclick="toggleNav()"></div>
    <ul class="nav">
        <h1>Add Friends</h1>
        <div class="nav-item">
            <input id="friend-search" type="text" name="friend-search" placeholder="Name">
        </div>


        <script>
            open_bool = true;
            function toggleNav() {
                if (open_bool) {
                    document.getElementById("sidebar").style.width = "0px";
                    document.getElementById('toggle-sidebar').style.marginLeft = '-50px';
                    open_bool = false;
                } else {
                    document.getElementById("sidebar").style.width = "250px";
                    document.getElementById('toggle-sidebar').style.marginLeft = '200px';
                    open_bool = true;
                }
                document.getElementById('friend-search').value = "";

            }
        </script>

    </ul>
</nav>
<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "nav-item autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/

                    b = document.createElement("DIV");
                    b.setAttribute("class", "hints");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<img class = 'hint-pic' src = '../../../images/prof.png'>";
                    b.innerHTML += "<strong style = 'cursor: pointer;'>" + arr[i].substr(0, val.length) + "</strong>" + "<span style = 'cursor: pointer;'>" + arr[i].substr(val.length)+"</span>";
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input input type='hidden' value='" + arr[i] + "'>";
                    b.innerHTML += "<img class = 'add-button' src = '../../../images/add.png'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }
    autocomplete(document.getElementById("friend-search"), users);
    </script>-->
<!-- header -->
<div class="headerw3l" id="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container header-cont">
            <div class="navbar-header navbar-left">
                <h1><a href="/">ActionTime<span><i>Learn.</i> <i class="logo-w3l2">Share.</i> <i
                                    class="logo-w3l3"> Laugh.</i> <i class="logo-w3l4"> Grow.</i></span></a></h1>
            </div>
            <!-- navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    </li>
                    {{--                    @guest--}}
                    {{--                        <li><a href="{{ route('login') }}" class="link link--yaku"><span>S</span><span>I</span><span>G</span><span>N</span><span>&nbsp;</span><span>I</span><span>N</span></a></li>--}}
                    {{--                        <li><a href="#" class="link link--yaku"><span>S</span><span>I</span><span>G</span><span>N</span><span>&nbsp;</span><span>U</span><span>P</span></a></li>--}}
                    {{--                    @else--}}

                    {{--                            <a href="#" class="dropdown-toggle link link--yaku" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>{{Auth::user()->name}}</span><span class="caret"></span>--}}
                    {{--                                <ul class="dropdown-menu">--}}
                    {{--                                    <li><a href="{{ route('user/myprofile') }}" class="link link--yaku"><span>P</span><span>R</span><span>O</span><span>F</span><span>I</span><span>L</span><span>E</span></a></li>--}}
                    {{--                                    <li><a href="{{ route('logout') }}"--}}
                    {{--                                           onclick="event.preventDefault();--}}
                    {{--                                           document.getElementById('logout-form').submit();"--}}
                    {{--                                           class="link link--yaku"><span>S</span><span>I</span><span>G</span><span>N</span><span>&nbsp;</span><span>O</span><span>U</span> <span>T</span></a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </a>--}}

                    {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                    {{--                            @csrf--}}
                    {{--                        </form>--}}

                    {{--                    @endguest--}}

                </ul>

                <div class="clearfix"></div>
                @auth
                    @if(Auth::user()['img'] == null)
                        @php $img = '../../../images/prof.png'; @endphp
                    @else
                        @php $img = '../../../upload/'.Auth::user()['img']; @endphp
                    @endif
            </div><!-- //navigation -->
            <div class="profile mt-4">
                <div class="row nav-row">

                    <div class="col-md-9 mt-3" id = "nav-col-9">
                        <a id = "username" href="/profile" class="link link--yaku navbar-user mt-3" onmouseover="deeperColorUser()" onmouseout="normalColorUser()">{{Auth::user()['user_name']}}</a>

                    </div>
                    <div class="col-md-2 px-0">
                        <div class="nav-prof-container shadow-sm">
                            <input type="image" id="nav-prof" class="nav-prof-pic dropdown-toggle"
                                   src="{{$img}}" onclick = "signOut()">
                        </div>
                    </div>
                    <div class="col-md-1 px-0 icon-col">
                        <i class="fa nav-fa" onclick = "signOut()">&#xf0d7;</i>
                    </div>

                </div>
                <div id="myDropdown" class="dropdown-content mt-3" onmouseover="deeperColor()" onmouseout="normalColor()">
                    <a href="{{route('signout')}}">Sign Out</a>

                </div>


            </div>
            <script>
                function signOut(){
                    document.getElementById("myDropdown").classList.toggle("show");
                }
                window.onclick = function(event) {
                    if (!event.target.matches('.fa') && !event.target.matches('.nav-prof-pic')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            @endauth

        </div>
    </nav>
</div>
<script>
    function randomColor() {
        var letters = '89ABC';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 5)];
        }
        return color;
    }

    color = randomColor();
</script>
<!-- //header -->
<div class="page-content">
    @yield('content')
</div>
<!-- footer -->
<div class="copy-right fixed-bottom" id="footer">
    <div class="container">
        <p>© 2019 ActionTime. All rights reserved | Design by <a href="#"> Monmouth University</a></p>
    </div>
</div>
<script>
    let copyright = $(".copy-right");
    let copyrightHeight = parseFloat(copyright.css("height"));
    let container = $(".page-content");
    container.css("padding-bottom", copyrightHeight + 'px');
</script>
<script>

    var header = document.getElementById("header");
    header.style.backgroundColor = color;
    var navbar = document.getElementById('navbar');
    navbar.style.backgroundColor = color;
    var footer = document.getElementById("footer");
    footer.style.background = color;
    signout = document.getElementById('myDropdown');
    signout.style.background = color;
    username = document.getElementById('username');
    function shadeColor(percent) {

        var R = parseInt(color.substring(1,3),16);
        var G = parseInt(color.substring(3,5),16);
        var B = parseInt(color.substring(5,7),16);

        R = parseInt(R * (100 - percent) / 100);
        G = parseInt(G * (100 - percent) / 100);
        B = parseInt(B * (100 - percent) / 100);

        R = (R<255)?R:255;
        G = (G<255)?G:255;
        B = (B<255)?B:255;

        var RR = ((R.toString(16).length==1)?"0"+R.toString(16):R.toString(16));
        var GG = ((G.toString(16).length==1)?"0"+G.toString(16):G.toString(16));
        var BB = ((B.toString(16).length==1)?"0"+B.toString(16):B.toString(16));

        return "#"+RR+GG+BB;
    }
    function deeperColor(){
        signout.style.background = shadeColor(25);
    }
    function normalColor(){
        signout.style.background = color;
    }
    function deeperColorUser(){
        username.style.color = shadeColor(60);
    }
    function normalColorUser(){
        username.style.color = '#fff';
    }

</script>
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset("frontend/js/move-top.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/easing.js")}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset("frontend/js/bootstrap.js")}}"></script>
</body>
</html>
