<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Resume - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/dashboard_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{asset('assets/dashboard_assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard_assets/vendor/devicons/css/devicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/dashboard_assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/dashboard_assets/css/resume.min.css')}}" rel="stylesheet">
      <style>
        .btn-add{
         font-size:2vh; background:rgb(211, 206, 206); border-radius:50px; padding:10px 10px; color:black;
         height: 5%;
        }
        .btn-add:hover{
          background: #d8815e;
        }
      </style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <div  style="position: relative;">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="@if($user->img_perfi==null)
          https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png
          @else
          {{$user->img_perfi}}
          @endif
          " alt="">
          <div style=" position: absolute;
          top: 10px;
          left: 10px;"><span class="fa-stack fa-lg perfilUser" ><i style="background:rgb(211, 206, 206); border-radius:50px; padding:10px 10px; color:black" class="fa fa-pencil-square-o" ></i></span></div>
          </div>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
         
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">{{$user->nombre}}
            <span class="text-primary">{{$user->apellido}}</span>
          </h1>
          <div class="subheading mb-5">@if($user->direccion == null) <span class="generalInfoModal">sin direccion </span> 
            @else 
            {{$user->direccion}}
            @endif
            @if($user->telefono == null)   
            · <span class="generalInfoModal">sin telefonoo</span>  ·
            @else 
            . {{$user->telefono}}  .
            @endif
            <a href="{{$user->email}}">{{$user->email}}</a> <i class="fa fa-pencil-square-o mx-3 perfilUser" ></i>
          </div>
          <p class="mb-5">@if($user->descripcion==null)
                 <span class="generalInfoModal">sin descripcion</span> 
                  @else
                  {{$user->descripcion}}   
                  @endif      
        </p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="{{$user->faceboook}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{$user->twitter}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{$user->linkedin}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        
        <div class="my-auto">
          <div class="d-flex">
          <h2 class="mb-5">Experience </h2>
        
        </div>
          @if (count($experencia)>0)
          @foreach ($experencia as $row)
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" id="titulo-experencie">{{$row->titulo}} </h3>
              <div class="subheading mb-3" id="subTitle-experencie">{{$row->lugar_experiencia}}</div>
              <p id="descri-experencie">{{$row->descripcion}}</p>
            </div>
            <div class="resume-date text-md-right" id="resume-date-experencie">
              <span class="text-primary">{{$row->fecha_inicial}} - {{$row->fecha_final}}</span>
            </div>
          </div>

          @endforeach
          

          
          @else
          <h4 class="experince">sin exprencia</h4>
          @endif
        </div>
     
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <div class="d-flex">
          <h2 class="mb-5">Education</h2>
         
        </div>
          @if (count($educacion)>0)
 
          @foreach($educacion as $row)
          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0" >{{$row->nombre_centro}} </h3>
              <div class="subheading mb-3">{{$row->titulo}}</div>
              <p>{{$row->detalle}}</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">{{$row->fecha_inicial}} - {{$row->fecha_final}}</span>
            </div>
          </div>
          @endforeach
        @else 
        <h4 class="education">sin educacion</h4>
        @endif
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <div class="d-flex">
          <h2 class="mb-5 " >Skills</h2>
          
        </div>
          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>
   @if(count($habilidades)>0)

   
          <div class="subheading mb-3">
             
            {{$habilidades[0]['titulo']}}
          
      
          
          </div>
          <ul class="fa-ul mb-0">
            @foreach($habilidades as $row)
            <li>
              <i class="fa-li fa fa-check"></i>
              {{$row->descripcion}} </li>
              @endforeach
          </ul>
        </div>
     
        @else 
        <h4 class="skill" >agregar habilidades</h4>
        @endif
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <div class="d-flex">
            <h2 class="mb-5">Interests </h2> 
           
          </div>
         @if (count($interes)>0)
          <p class="mb-0">{{$interes[0]->descripcion}}</p>
          @else
          <h4 >agregar una descripcion</h4>
          @endif
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
    

          <div class="d-flex">
            <h2 class="mb-5">Awards &amp; Certifications </h2>  
           
          </div>
          @if (count($premio))
          <ul class="fa-ul mb-0">
        @foreach($premio as $row)
            <li>
              
              <i class="fa-li fa fa-trophy text-warning"></i>
              {{$row->descripcion}}
 
            </li>
           @endforeach
          </ul>
          @else
          <h4  onclick="awarsBtn(false,0)">sin premios </h4>
          @endif
        </div>
      </section>

    </div>



    


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('assets/dashboard_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dashboard_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('assets/dashboard_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('assets/dashboard_assets/js/resume.min.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script >