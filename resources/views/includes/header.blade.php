<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Data Wizard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link active"  href="https://drive.google.com/file/d/17L_dCRaT5mOOrpjQVHCBR1DAxU6Aynb8/view?usp=sharing" aria-current="page" href="#">Sample User Dataset Download</a>
                </li>
            </ul>
            <span class="navbar-text">

                   @if($loggedUser)
                    <div>

                      <a href="{{route('logout')}}" ><i class=" fa fa-unlock-alt " aria-hidden="true"></i> {{$loggedUser}} </a>

               <button type="button" class="btn btn-danger">   <a href="{{route('logout')}}" >  Logout </a></button>
               </div>
                @else
                    <li> <a href="{{route('loginform')}}" ><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
                    <li> <a href="{{route('registerform')}}" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register </a></li>
                @endif

      </span>
        </div>
    </div>
</nav>
