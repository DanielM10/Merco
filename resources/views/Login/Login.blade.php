<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
   
        <!-- META SECTION -->
        <title>Merco-Login</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script> 
                <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>         
                  <script type="text/javascript" src="scripts/Mensajes.js"></script>  
                  <script type="text/javascript" src="scripts/login.js"></script>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
      
        <!-- CSS INCLUDE -->   
        <link  rel="stylesheet" type="text/css" href="{{asset('css/theme-default.css')}}"> 
        <link  rel="stylesheet" type="text/css" href="{{asset('css/Mensajes.css')}}"> 
            


        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <div class="login-container">
            <div class="login-box animated fadeInDown">
            @if ($errors->any())        
                     @foreach ($errors->all() as $error)
                     <script>                    
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
                     </script>
                     <div id="myModal" class="modal fade bd-example-modal-sm" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 style="color:white;" class="modal-title">¡Advertencia!</h2>
      </div>
      <div class="modal-body">
      <div class='col-xs-3 col-sm-3 col-md-1 col-lg-3'>
      <img class='TamanoImagen' src='img/Advertencia.png'/> 
      </div>   
      <div style="font-size: 15px;" class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
     <strong><p> {{$error}}</p></strong>
      </div>  
      </div>
      <br>
      <br>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
      </div>
    </div>

  </div>
</div>
                     @endforeach    
            @endif
                <div class="login-logo"></div>
                <div class="login-body" style = "text-align: center;">
                    <div class="login-title" style = "text-align: center;"><strong>Bienvenido</strong></div>                     
                    <form  class="form-horizontal" method="POST" action="{{route('postLogin') }}">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-12">
                            <input class="form-control" 
                                type="email"
                                name="Correo"
                                placeholder="Correo" required />                         
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input  class="form-control" 
                                type="password"
                                name="password"
                                placeholder="Password" required
                                />
                                {!! $errors->first('password','<span>La contraseña es incorrecta</span>') !!}
                        </div>
                    </div>                 
                    <div style="align-items:center; display: flex;
  align-items: center;
  justify-content: center;" class="form-group">                        
                        <div class="col-md-10">
                            <button class="btn btn-success btn-block">Entrar</button>                    
                    </div>
                    @if (Session::has('Contrasenamala'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
                    </form>
                </div>
                <div class="login-footer">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Recuperar contraseña
                                </a>
                    <div class="pull-left">
                        &copy; 2018
                    </div>                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>






