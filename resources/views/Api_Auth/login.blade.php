<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



<link rel="stylesheet" type="text/css" href="{{asset('/')}}/DataTables-1.12.1/css/jquery.dataTables.min.css"/>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row mx-auto my-auto">
        <div align="center" class="col-sm-12 mx-auto my-auto">
            <form class="form form-horizontal py-lg-5 " action='' method="POST">
                <fieldset class="form-control">
                    <div id="legend">
                        <legend class="py-lg-5">Login</legend>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">

                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">

                        </div>
                    </div>



                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls pt-lg-3">
                            <button class="btn btn-success">Login</button>
                        </div>

                        <div class="controls py-lg-5">
                            New User Register ->
                            <a class="btn btn-primary " href="{{route('registerform')}}"><b class="text-dark">Register</b></a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
