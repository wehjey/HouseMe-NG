@extends('accountLayout')

@section('content')

    <div class="row">

    <div class="col-md-8">

        <center>
            <div style="width: 90%; height: 400px; background-color: orangered">

            </div>
        </center>


    </div>

        <div class="col-md-4" >

            <div style="background-color: white; padding: 15px;width: 85%; height: 450px">
                <h2>LOGIN</h2>

<br/>
                <form>

                    <div class="form-horizontal">


                        <label>Username or Email</label>
                        <div>
                            <input  type="text" class="form-control"/>
                        </div>

                        <br/>
                        <label>Password</label>
                        <div>
                            <input  type="text" class="form-control"/>
                        </div>

                        <br/>

                        <div>
                            <input type="submit" value="Login" class="btn bg-success" style="width: 100%"/>
                        </div>

                        <div>
                            <nav>
                                <a href="#">Create an account</a>&nbsp;| &nbsp;
                                <a href="#">Forgot Password</a>
                            </nav>
                        </div>





                    </div>
                </form>



            </div>



        </div>


    </div>


    @endsection