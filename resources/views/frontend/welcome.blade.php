@extends('frontend/layout')
@section('content')
    <!-- <div class="content">
        <div class='left'><img class = 'block-icons' src = "{{asset('frontend/images/public_challenges.png')}}"><span class = 'block-title'>Public Challenges</span>
        </div>
        <div class='middle'><img class = 'block-icons' src = "{{asset('frontend/images/login.png')}}"><span class = 'block-title'>Login/Sign Up</span>
        </div>
        <div class='right'><img class = 'block-icons' src = "{{asset('frontend/images/info.png')}}"><span class = 'block-title'>Learn More</span>
        </div>
    </div>-->
    <div class="container pt-3">
        <div class="row">
            <h1>About ActionTime</h1>
        </div>
        <div class="row">
            <p class="desc">ActionTime is a planner that can be used to build habits and complete tasks.</p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="card left">
                    <img class="gif card-img-top" src="{{asset('frontend/images/megaphone.png')}}">
                <!--<img src="{{asset('frontend/images/megaphone.png')}}" class="card-img-top" alt="...">-->
                    <div class="card-footer">
                        <h1 class="card-title">Public Challenges</h1>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function () {
                    $(".left").hover(
                        function () {
                            var src = $(".gif").attr("src");
                            $(".gif").attr("src", src.replace(/\.png$/i, ".gif"));
                        },
                        function () {
                            var src = $(".gif").attr("src");
                            $(".gif").attr("src", src.replace(/\.gif$/i, ".png"));
                        });
                });
            </script>

            <div class="col-sm-3">
                <div id="card2" onclick="expand()" class="card middle">
                    <button type="button" class="close hide" aria-label="Close">
                        <span onclick="collapse();" class="float-right pr-1" aria-hidden="true">&times;</span>
                    </button>
                    <div class="front">
                        <h2 class="login-title pt-3">Login!</h2>
                        <div id="user" class="form-group username pt-5">
                            <label for="usr" class="textbox-text pb-1">Username:</label>
                            <input type="text" class="form-control textbox" id="user">
                        </div>
                        <div id="pass" class="form-group username mt-5 z-98">
                            <label for="usr" class="textbox-text pb-1">Password:</label>
                            <input type="password" class="form-control textbox" id="pass">
                        </div>
                        <button type="button" class="btn btn-info login-btn mt-10">Login</button>
                        <div class='login-footer mt-12'>
                            <p>Don't have an account? <a href="#" onclick = "flip()">Sign up here!</a></p>
                        </div>
                    </div>
                    <div class="back">
                        <h2 class="login-title pt-3">Sign Up!</h2>
                        <div class="form-group username pt-5 z-99">
                            <label for="usr" class="textbox-text pb-1">Username:</label>
                            <input type="text" class="form-control textbox" id="create_user">
                        </div>
                        <div class="form-group username mt-5 z-99">
                            <label for="usr" class="textbox-text pb-1">Email:</label>
                            <input type="email" class="form-control textbox" id="create_email">
                        </div>
                        <div  class="form-group username mt-8 z-99">
                            <label for="usr" class="textbox-text pb-1">Password:</label>
                            <input type="password" class="form-control textbox" id="create_pass1">
                        </div>
                        <div class="form-group username mt-11 z-99">
                            <label for="usr" class="textbox-text pb-1">Confirm password:</label>
                            <input type="password" class="form-control textbox" id="create_pass2">
                        </div>
                        <button type="button" class="z-200 btn btn-info login-btn mt-15 ">Sign Up!</button>
                        <div class='login-footer mt-17 z-99'>
                            <p>Already have an account? <a href="#" onclick = "flip()">Log in here!</a></p>
                        </div>
                    </div>
                    <img src="{{asset('frontend/images/login.png')}}" class="z-1 card-img-top" alt="...">
                    <div class="card-footer">
                        <h1 class="card-title">Login/Sign Up</h1>
                    </div>
                </div>
            </div>
            <script>
                function flip(){
                    var card = $(".card")[1];
                    $("#card2").toggleClass('flip');
                }
                function expand() {
                    var card = $(".card")[1];
                    var close = $(".close")[0];
                    card.removeAttribute('onclick');
                    $("#card2").removeClass('collap');
                    $("body").removeClass('unblur');
                    $("#card2").addClass("expand");
                    $("body").addClass('blur');
                    setTimeout(function () {
                        close.setAttribute('onclick', 'collapse()');
                    }, 2000);
                }

                function collapse() {

                    var card = $(".card")[1];
                    var close = $(".close")[0];
                    close.removeAttribute('onclick');
                    $("#card2").removeClass("expand");
                    $("body").removeClass('blur');
                    $("#card2").addClass("collap");
                    $("body").addClass("unblur");
                    $("#card2").removeClass('flip');
                    setTimeout(function () {
                        card.setAttribute('onclick', 'expand()');
                    }, 2000);

                }
            </script>
            <div class="col-sm-3">
                <div class="card right">
                    <img src="{{asset('frontend/images/info.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-footer">
                        <h1 class="card-title">Learn More</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
