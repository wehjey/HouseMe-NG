@extends('AdminLayout')

@section('style')
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet"/>

    @endsection

@section('content')

    @include('_CategoryPartial')

    <br/>


    <div style="background:white; padding:10px 20px">

        <div class="row"  >


            <div class="col-md-5">

                <div class="gallery">
                    <div class="images">
                        <div class="image active">
                            <div > <img class="content" src="{{ asset('images/01.jpg') }}"/> </div>
                        </div>
                        <div class="image">
                            <div > <img class="content" src="{{ asset('images/02.jpg') }}"/></div>
                        </div>
                        <div class="image">
                            <div><img class="content" src="{{ asset('images/03.jpg') }}"/></div>
                        </div>
                    </div>
                    <div class="thumbs">
                        <div class="thumb active" style="background-image: url(images/01.jpg)"> </div>
                        <div class="thumb" style="background-image: url(images/02.jpg)"></div>
                        <div class="thumb" style="background-image: url(images/03.jpg)"></div>
                    </div>
                </div>




            </div>

            <div class="col-md-7">

                <h3>Tempered Glass Gas Cooker</h3>

                <b>ID:</b>&nbsp;<text>RSB122558y8</text><br/>
                <b>STARTING PRICE:</b>&nbsp;<text>N 5,000</text><br/>
                <b>CURRENT BID:</b>&nbsp;<text>N 5,200</text><br/><br/>
                <b>DESCRIPTION</b><br/>

                <div class="underline" style="background: #002078"></div>

                <div id="itemDescription" class="well">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>

                <input class="bidBTN" id="bidBtn" value="PLACE BID" type="submit" style="margin-top: -10px; width: 200px;  border-radius: 5px;padding: 10px"/>


            </div>





        </div>




    </div>
    <br/>

    <div style="background:white; padding:10px 20px">

        @include('_SimilarListing')
    </div>

    @include('_AssestLoginPartial')
    @include('_AssestRegisterPartial')

@endsection

@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 10000
            })
        });



    </script>
    <script src="{{ asset('js/hammer.js') }}"></script>
    <script src="{{ asset('js/gallery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script>



    @endsection