@extends('AssetLayout')

@section('content')


    @include('_CategoryPartial')

    <br />

    <div class="row">

        <div class="col-md-8" style="padding-right:5px">


                <img src="{{ asset('images/IPHONE.png') }}" class="img-responsive" /><!-- width 760px; height:300px  -->


        </div>

        <div class="col-md-4" >

            <div style="margin-bottom:10px">
                <img src="{{ asset('images/zero3.jpg') }}" class="img-responsive" /><!-- width 385px height:170px -->
            </div>


            <div>
                <img src="{{ asset('images/zero4.jpg') }}" class="img-responsive" />   <!-- image with >>> width 385px  height:14s0px-->

            </div>

        </div>



    </div>

    <br />



    @include('_TopDealPartial')

    @include('_AssestLoginPartial')
    @include('_AssestRegisterPartial')

    @endsection