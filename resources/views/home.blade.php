<!doctype html>



<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<header>

    <nav id=nav-bar>
        <ul>
            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    {{ __('salir') }}
                </a></li>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </nav>


</header>

<body>
        <div id="box">
            <div id="x0" href="{{route('x0')}}" onclick="event.preventDefault();
                                             document.getElementById('x0-form').submit();">
                <video src="{{asset('storage/home/back.mp4')}}" autoplay="true" loop="true" muted="true" poster="/resources/img/home/back.mp4">
                </video>

                <form id="x0-form" action="{{ route('x0' )}}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
            <div id="ppt" href="{{ route('ppt') }}" onclick="event.preventDefault();
                                             document.getElementById('ppt-form').submit();">
                <video src="{{asset('storage/home/ppt.mp4')}}" autoplay="true" loop="true" muted="true" poster="/resources/img/home/back.mp4">
                </video>
            </div>

            <form id="ppt-form" action="{{ route('ppt') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <video id="video_background" src="{{asset('storage/home/homeb.mp4')}}" autoplay="true" loop="true" mute="true">

        </video>
</body>
<style>
    #video_background {
        position: absolute;
        bottom: 0px;
        right: 0px;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1000;
        overflow: hidden;
    }

    #video_pattern {
        background: #fff;
        position: fixed;
        opacity: 0.8;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    #ppt video {
        -webkit-transition: all .9s ease;
        /* Safari y Chrome */
        -moz-transition: all .9s ease;
        /* Firefox */
        -o-transition: all .9s ease;
        /* IE 9 */
        -ms-transition: all .9s ease;
        /* Opera */
        width: 130%;
        border-radius: 10px;
margin-left: -12%;
        height: 110%;
    }

    #ppt:hover video {
        -webkit-transform: scale(1.25);
        -moz-transform: scale(1.25);
        -ms-transform: scale(1.25);
        -o-transform: scale(1.25);
        transform: scale(1.25);
    }

    #ppt {
        /*Ancho y altura son modificables al requerimiento de cada uno*/
        width: 300px;
        overflow: hidden;
        cursor: pointer;
        padding:0px 10px 0px 10px;

    }



    #x0 video {
        -webkit-transition: all .9s ease;
        /* Safari y Chrome */
        -moz-transition: all .9s ease;
        /* Firefox */
        -o-transition: all .9s ease;
        /* IE 9 */
        -ms-transition: all .9s ease;
        /* Opera */
        width: 100%;
        border-radius: 10px;
    }

    #x0:hover video {
        -webkit-transform: scale(1.25);
        -moz-transform: scale(1.25);
        -ms-transform: scale(1.25);
        -o-transform: scale(1.25);
        transform: scale(1.25);
    }

    #x0 {
        /*Ancho y altura son modificables al requerimiento de cada uno*/
        width: 300px;
        overflow: hidden;
        cursor: pointer;
        padding:0px 0px 0px 10px;

    }

    * {
        padding: 0px;
        margin: 0px;
    }


    #box {
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        padding: 10% 0% 0% 0%;
        flex-wrap: wrap;
    }



    #nav-bar {
        margin-top: 0px;

        width: 85vw;
        justify-content: space-around;
        align-items: center;
        display: flex;
    }

    header {
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        background: black;
        color: #fff;
        width: 100vw;
    }

    a {
        text-decoration: none;
        color: white;
        font-size: 25px;
        ;
    }

    nav ul {
        list-style-type: none;
        /* Quitamos las viñetas de la lista */
    }

    nav li {
        display: inline;
        /* Ítems del menú en una línea horizontal */
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    ​ header {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    ​ nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ​ nav li {
        display: inline;
        /* Hace que los ítems del menú estén en una línea horizontal */
        margin-right: 20px;
        /* Espacio entre los ítems del menú */
    }



    ​ nav a:hover {
        text-decoration: underline;
        color: #fff;
        font-size: 55px;
    }
</style>

</html>