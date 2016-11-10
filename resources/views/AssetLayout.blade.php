<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="{{ asset('css/bootstrap2.css') }}" rel="stylesheet"/>
    <link href="{{asset('css/assetStyle.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Roboto" rel="stylesheet">

    @yield('style')

    <title>{{ $title }}</title>
</head>

<body>



<div style="background:white; z-index: 10000" class="shadow" data-spy="affix" data-offset-top="100">
    <div id="topbar"></div>
    <div class="container" style="background:#fff; padding:10px 0px">

        <div class="row">


            <div class="col-md-3" style="margin-bottom:5px">
                <center>
                    <img src="{{ asset('images/rosabonlogo.png') }}" />
                </center>

            </div>

            <div class="col-md-6" style="margin-bottom:5px">

                <center>
                    <div>
                        <input id="searchBox" type="text" placeholder="e.g item name" style=""/>
                        <select id="catDD">
                            <option>-Category-</option>
                        </select>
                        <button id="searchBtn" type="submit"><i class="fa fa-search"></i>&nbsp;Search</button>

                    </div>
                </center>


            </div>

            <div class="col-md-3" style="margin-bottom:5px">

                <center>
                    <nav id="authNav">
                        <i class="fa fa-user" style="font-size:20px"></i>&nbsp;
                        <a href="" data-toggle="modal" data-target="#loginModal"> LOGIN</a>
                        or
                        <a href="" data-toggle="modal" data-target="#registerModal"> REGISTER</a>
                    </nav>
                </center>


            </div>

        </div>

    </div>
</div>



<br />

<div class="container">
   @yield('content')
</div>


<footer id="footer">

    <br/>

    <div class="container">

        <div class="col-md-4">

            <div class="form-horizontal" style="padding: 0px">

                <span style="color:white;font-size: 25px">Subscribe to our newsletter</span>
                <input id="nameTxtbox" type="text" class="form-control" placeholder="Enter name" style="margin-bottom: 5px" />

                <input id="emailTxtbox" type="email" class="form-control" placeholder="Enter email address" style="margin-bottom: 5px"/>
                <input id="submitBtn" type="submit" value="Submit" class="btn btn-primary form-control"/>
            </div>

        </div>

        <div class="col-md-4">

            <div id="info" style="color: white">

                <i class="fa fa-map-marker" style="font-size: 25px;float: left; margin-right: 8px"></i>
                <div style="word-wrap: break-word">No. 32 Montgomery Road, Sabo-Yaba, Lagos, Nigeria</div> <br/>

                <i class="fa fa-phone"  style="font-size: 25px;float: left; margin-right: 8px"></i> 08012345678  <br/><br/>
                <i class="fa fa-envelope" style="font-size: 25px;float: left; margin-right: 8px"></i> example@yahoo.com

            </div>


        </div>

        <div id="social" class="col-md-4" style="color: white">

            <a href="#"><i class="fa fa-twitter-square"></i></a>
            <a href="#"><i class="fa fa-linkedin-square"></i></a>
            <a href="#"><i class="fa fa-google-plus-square"></i></a>
            <a href="#"><i class="fa fa-facebook-square"></i></a>
            <a href="#"><i class="fa fa-youtube-square"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>

        </div>

    </div>

</footer>

<div style="padding: 5px; background: #222">

    <center>
        Copyright
    </center>

</div>

<script src="{{asset('js/jquery-3.1.1.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>

@yield('script')


</body>

</html>