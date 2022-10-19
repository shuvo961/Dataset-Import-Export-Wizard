<!doctype html>
<html>
<head>
    <title>User Data Wizard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/DataTables-1.12.1/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/Buttons-2.2.3/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/Select-1.4.0/css/select.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/DataTables/datatables.css"/>

</head>
<body>

@include('includes.header')
<!-- Message -->
@if(Session::has('message'))
    <p >{{ Session::get('message') }}</p>
@endif

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="py-lg-4 ">
                     <h5 class="pt-lg-3">Select a CSV file to import</h5>
            </div>
            <div>
                    <form method='post' action='{{route('uploadFile')}}' enctype='multipart/form-data' >
                        {{ csrf_field() }}
                      <div class="row">
                          <div class="col-sm-9">
                              <input type='file' name='file' >
                          </div>
                          <div class="col-sm-3">
                              <input class="btn btn-success" type='submit' name='submit' value='Import'>
                          </div>
                      </div>

                    </form>

            </div>


        </div>
        <div class="col-sm-8 ">


            <div class="container">
                <div class="row">
                    <div class="col-sm-11 mx-auto my-auto">
                        <div class="panel panel-default border-0">

                            <div class="panel-heading py-lg-3">
                                <h5 class="text-dark  text-uppercase" align="center">User - Data     </h5>
                            </div>
                            <div class="panel-body">
                                <h3 id="msg" class="text-center text-success">

                                    @if($users->count()==0)
                                        <h5 align="center" class="alert alert-danger">{{'Please Import Data First... Database Empty!!'}}</h5>
                                    @endif

                                    {{Session::get('message')}}</h3>

                                <table id="table_id" class="display">
                                    <thead>
                                    <tr class="bg-primary text-white text-center">
                                        <th>SL NO</th>
                                        <th>User Name</th>
                                        <th>Country</th>
                                        <th>URL</th>
                                    </tr>
                                    </thead>
                                    @php($i=1)
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$user->country}}</td>
                                            <td>{{$user->url}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



      </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>

        <div class="col-sm-1">
            <div class="py-lg-5 mt-lg-5">
                <a href="{{route('download-csv')}}" class="btn btn-primary"> Export </a>
            </div>
        </div>


    </div>
</div>


<!-- Form -->


<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


<script type="text/javascript" src="{{asset('/')}}/DataTables/datatables.js"></script>
<script type="text/javascript" src="{{asset('/')}}/JSZip-2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/pdfmake-0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/pdfmake-0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="{{asset('/')}}/DataTables-1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/Buttons-2.2.3/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/Buttons-2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/Buttons-2.2.3/js/buttons.print.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}/Select-1.4.0/js/dataTables.select.min.js"></script>


<script type="text/javascript">
    $('#table_id').DataTable( {
        dom: 'B<"clear">lfrtip',
        buttons: true,
        buttons: {
            buttons: [ 'csv', 'excel' ,'pdf' ]
        }
    } );
</script>
</body>
</html>
