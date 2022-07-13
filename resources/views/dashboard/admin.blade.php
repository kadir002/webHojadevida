<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{asset('assets/dashboard_assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/dashboard_assets/css/css-admin.css')}}">  

</head>
  <body>
    <div class="container rounded bg-white mt-5 mb-5">
        
        <div class="row">
            
            <div class="col-md-3 border-right">
                <form action="{{route('user.adminUpdate',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <a class="btn" href="{{route('dashboard.index')}}"><i class="fa fa-arrow-left" aria-hidden="true"  ></i></a>
                   
                    <img class="rounded-circle mt-5" width="150px" src="@if(auth()->user()->img_perfi==null)
                    https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png
                    @else
                    {{auth()->user()->img_perfi}}
                    @endif
                    " alt="">
                    
           
                    <div class="input-group mb-3 mt-2">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" class="form-control" name="file" accept="image/*">
                      </div>
                    <span class="font-weight-bold">{{auth()->user()->nombre}} {{auth()->user()->apellido}}</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span>
                </div>
                </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                   
                    <div class="row mt-2">
                        
                            @method('patch')
                            @csrf
                        <div class="col-md-6"><label class="labels">Nombre</label>
                            <input type="text" class="form-control" placeholder="{{$user->nombre}}" value="" name="nombre"></div>
                        <div class="col-md-6"><label class="labels">Surname</label>
                            <input type="text" class="form-control" value="" placeholder="{{$user->apellido}}" name="apellido"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Telefono</label><input name="telefono" type="text" class="form-control" placeholder="{{$user->telefono}}" value=""></div>
                        <div class="col-md-12"><label class="labels">direccion</label><input name="direccion" type="text" class="form-control" placeholder="{{$user->direccion}}" value=""></div>
                        <div class="col-md-12"><label class="labels">descripcion</label><input name="descripcion" type="text" class="form-control" placeholder="{{$user->descripcion}}" value=""></div>
                        
                    </div>
                
                   
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <form  action="{{route('user.adminUpdate',auth()->user()->id)}}" method="post">
                        @method('patch')
                        @csrf
                    
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit social</span><button type="submit" class="border px-3 p-1 add-experience"><i class="fa fa-refresh"></i>&nbsp;update social</button></div><br>
                    <div class="col-md-12"><label class="labels">facebook <i class="fa fa-facebook mx-2" aria-hidden="true"></i></label><input type="text" class="form-control"  name="facebook" placeholder="{{auth()->user()->facebook}}"></div> 
                    <div class="col-md-12"><label class="labels">twitter  <i class="fa fa-twitter mx-2" aria-hidden="true"></i></label><input type="text" class="form-control"  name="twitter" placeholder="{{auth()->user()->twitter}}"></div>
                    <div class="col-md-12"><label class="labels">linkedin  <i class="fa fa-linkedin mx-2" aria-hidden="true"></i></label><input type="text" class="form-control"  name="linkedin" placeholder="{{auth()->user()->linkedin}}"></div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>