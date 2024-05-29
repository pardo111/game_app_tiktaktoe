<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra | Papel | Tijerass</title>
</head>

<body>
    <h1>Piedra, Papel , Tijeras</h1>
    <div id="campo-batalla" class="campo-batalla">
        <div id="img-ataque-jugador" class="caja-batala"><!--<img class="img-batalla" src="assets/Papel.PNG" alt="">-->
        </div>
        <div class="caja-batala">
            <p class="text-mensajes">VS</p>
        </div>
        <div id="img-ataque-pc" class="caja-batala"><!--<img class="img-batalla" src="assets/Piedra.PNG" alt="">-->
        </div>
    </div>
    <div>
        <p id="msj-batalla" class="text-mensajes"> </p>
    </div>
    <h2>Elije un ataque</h2>
    <div>
        <img id="btn-piedra" class="btn-ataques" src="https://media.geeksforgeeks.org/wp-content/uploads/20210705223618/default.jpeg" alt="">
        <img id="btn-papel" class="btn-ataques" src="https://www.pngitem.com/pimgs/m/592-5920636_rock-paper-scissors-clipart-rock-paper-scissors-png.png " alt="">
        <img id="btn-tijeras" class="btn-ataques" src="https://media.geeksforgeeks.org/wp-content/uploads/20210705223721/scissor.jpeg" alt="">
    </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');


    body {
        font-family: 'Josefin Sans', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .campo-batalla {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid red;
        padding: 30px;
        border-radius: 20px;
    }

    .caja-batala {
        margin: 25px;
    }

    .text-mensajes {
        font-size: 45px;
    }

    .img-batalla {
        border-radius: 50%;
        max-height: 100px;
    }

    .btn-ataques {
        width: 100px;
        border-radius: 50%;
        margin: 20px;
        max-height: 100px;

    }

    .btn-ataques:hover {
        border: 2px solid red;
        cursor: pointer;
        margin: 18px;
    }
    #campo-batalla{
        max-height: 2%;
    }
</style>
<script>

    const seccionBatalla = document.getElementById('campo-batalla');
    const msjBatalla = document.getElementById('msj-batalla');
    const imgAtaqueJugador = document.getElementById('img-ataque-jugador');
    const imgAtaquePc = document.getElementById('img-ataque-pc');
    const btnPiedra = document.getElementById('btn-piedra');
    const btnPapel = document.getElementById('btn-papel');
    const btnTijeras = document.getElementById('btn-tijeras');

    let opcionJugador;
    let opcionPc;
    let imgJugador;
    let imgPc;


    const imagenes = [
        {
            name: "Piedra",
            url: "https://media.geeksforgeeks.org/wp-content/uploads/20210705223618/default.jpeg"
        },
        {
            name: "Papel",
            url: "https://www.pngitem.com/pimgs/m/592-5920636_rock-paper-scissors-clipart-rock-paper-scissors-png.png"
        },
        {
            name: "Tijeras",
            url: "https://media.geeksforgeeks.org/wp-content/uploads/20210705223721/scissor.jpeg"
        }
    ];



    function iniciar() {
        seccionBatalla.style.display = 'none';
    };

    btnPiedra.addEventListener('click', function () {
        opcionJugador = "Piedra";
        opPc();
    });

    btnPapel.addEventListener('click', function () {
        opcionJugador = "Papel";
        opPc();
    });

    btnTijeras.addEventListener('click', function () {
        opcionJugador = "Tijeras";
        opPc();
    })


    function opPc() {
        var aleaorio = nAleatorio();

        if (aleaorio == 0) {
            opcionPc = "Piedra";
        } else if (aleaorio == 1) {
            opcionPc = "Papel";
        } else if (aleaorio == 2) {
            opcionPc = "Tijeras"
        };

        batalla();

    };

    function batalla() {
        if (opcionJugador == opcionPc) {
            msjBatalla.innerHTML = "Empate";
        } else if (opcionJugador == "Piedra" && opcionPc == "Tijeras") {
            msjBatalla.innerHTML = "Ganaste!";
        } else if (opcionJugador == "Papel" && opcionPc == "Piedra") {
            msjBatalla.innerHTML = "Ganaste!";
        } else if (opcionJugador == "Tijeras" && opcionPc == "Papel") {
            msjBatalla.innerHTML = "Ganaste!";
        } else {
            msjBatalla.innerHTML = "Perdiste :(";
        };

        addImagenes();

    }


    function nAleatorio() {
        let n = Math.floor(Math.random() * 3);
        return n;
    }


    function addImagenes() {
        for (let i = 0; i < imagenes.length; i++) {
            if (opcionJugador == imagenes[i].name) {
                imgJugador = imagenes[i].url;
                var inserta = `<img class="img-batalla" src=${imgJugador} alt="">`;
                imgAtaqueJugador.innerHTML = inserta;
            };

            if (opcionPc == imagenes[i].name) {
                imgPc = imagenes[i].url;
                var inserta = `<img class="img-batalla" src=${imgPc} alt="">`;
                imgAtaquePc.innerHTML = inserta;
            };

        };


        seccionBatalla.style.display = 'flex';

    };


    window.addEventListener('load', iniciar);
</script>

</html>