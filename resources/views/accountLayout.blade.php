<html>

<head>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{asset('css/assetStyle.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"/>


</head>

<body>

<div style="background-color: #204d74; height: 5px">

</div>

@include('_pageHead')



<div class="container-fluid" style="margin-top:10px; padding: 5px">
    @yield('content')
</div>




<script src="{{asset('js/jquery-3.1.1.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
</body>

</html>