<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <video 
                id="myVideo"
                src="{{asset('storage/home/gn.mp4')}}"
                loop    ="true"
                autoplay="true"
                muted   ="true">

                </video>   
<div id="content">

                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
      
                    


                        @if (Route::has('login'))
                            <nav id="nav-bar">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                    >
                                        Iniciar Sesion
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                        >
                                            Registrarse
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
  
 <div>
     <div class="d-flex justify-content-center">
         <h1   id="wel">Bienvenido</h1>

     </div>
     <br><br>
     <div class=" row d-flex justify-content-center" styles="display:flex;flex-wrap:wrap ;">
         <div class="col-4 col-xs-10 columna">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aperiam tempore inventore eum repudiandae debitis alias repellat architecto atque minus minima fugiat illum sit deserunt distinctio quisquam asperiores sint consectetur?
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero velit ea, unde maxime nam eum reprehenderit quibusdam fugit minus autem iste fugiat repellendus nisi soluta a assumenda quo praesentium ad.
         </div>
         <div class="col-4 col-xs-10 columna">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, aperiam tempore inventore eum repudiandae debitis alias repellat architecto atque minus minima fugiat illum sit deserunt distinctio quisquam asperiores sint consectetur?
             <br>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero velit ea, unde maxime nam eum reprehenderit quibusdam fugit minus autem iste fugiat repellendus nisi soluta a assumenda quo praesentium ad.

         </div>
     </div>

 </div>
 


</div>
                </body>

<style>
#myVideo {
    position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  object-fit: cover ;
  z-index: -1;
}
#content {
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
    header {
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        color: #fff;
        width: 100%;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 25px;
        margin:2% ;
    }


#nav-bar {
        margin-top: 0px;

        width: 100%;
        justify-content: end;
        align-items: center;
        display: flex;
    }




#wel {
     font-size: 1000%;
     color: white;

 }

 @media (max-width:900px) {
    
#wel {
     font-size: 500%;
     color: white;

 }

 }
 .columna {
     margin: 5%;
     display: flex;
     align-items: center;
     justify-content: center;
     align-content: center;
 }

a:hover{
    color:cyan;
    
    box-shadow: rgba(0, 255, 255, 0.25) 0px 54px 55px, rgba(0, 255, 255, 0.12) 0px -12px 30px, rgba(0, 255, 255, 0.12) 0px 4px 6px, rgba(0, 255, 255, 0.17) 0px 12px 13px, rgba(0, 255, 255, 0.09) 0px -3px 5px;}
</style>

</html>
