
<div class="col-md-8 col-md-offset-2 form-spacing-top">
  <nav class="navbar navbar-default">
     <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
       </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li class="{{Request::is('/') ? "active": ""}}"><a  href="/">Início<span class="sr-only"></span></a></li>
           <li class="{{Request::is('about') ? "active": ""}}"><a href="/about">Sobre Nós</a></li>
           <li class="{{Request::is('contact') ? "active": ""}}"><a href="/contact">Fale Connosco</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
             @if(Sentinel::check())
                   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Sentinel::getUser()->last_name}}<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                   <li><a href="#">Meu perfil</a></li>
                   <li><a href="{{url('/logout')}}">Logout</a></li>
               @else
                  <li><a href="{{url('/login')}}">Login</a>
               @endif
             </ul>
           </li>
         </ul>
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
  </nav>

</div>
