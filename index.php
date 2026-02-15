<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Para mi Mejor Amiga ✨</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:wght@300;400;600&display=swap');

        :root {
            --pink-main: #ff85a2;
            --pink-dark: #f06292;
            --bg-color: #fff0f3;
        }

        body {
            margin: 0;
            padding: 10px; /* Espacio para que no pegue a los bordes en móvil */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--bg-color);
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .container {
            text-align: center;
            background: white;
            padding: 25px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 400px; /* Tamaño ideal para lectura */
            width: 100%;
            box-sizing: border-box; /* Evita que el padding rompa el ancho */
            z-index: 10;
            border: 2px solid var(--pink-main);
            position: relative;
        }

        .foto-amiga {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--pink-main);
            margin-bottom: 10px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            color: var(--pink-dark);
            font-size: 2.2rem;
            margin: 10px 0;
        }

        .mensaje-perdon {
            background: #fff5f7;
            padding: 15px;
            border-radius: 15px;
            font-style: italic;
            color: #d81b60;
            margin: 15px 0;
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .pregunta-tena {
            font-weight: 600;
            font-size: 1.05rem;
            color: #333;
            margin-top: 20px;
            padding: 15px;
            border: 2px dashed var(--pink-dark);
            border-radius: 12px;
        }

        .firma {
            color: var(--pink-dark);
            margin-top: 20px;
            font-size: 1rem;
        }

        /* Corazones flotantes */
        .floating-heart {
            position: absolute;
            color: rgba(255, 133, 162, 0.4);
            pointer-events: none;
            animation: float 6s linear infinite;
            z-index: 1;
        }

        @keyframes float {
            0% { transform: translateY(110vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
        }

        .btn-musica {
            background: var(--pink-main);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 0.9rem;
            margin-bottom: 15px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(255, 133, 162, 0.3);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* AJUSTES PARA MÓVILES PEQUEÑOS */
        @media (max-width: 380px) {
            h1 { font-size: 1.8rem; }
            .container { padding: 20px; }
            .foto-amiga { width: 120px; height: 120px; }
            .pregunta-tena { font-size: 0.95rem; }
        }
    </style>
</head>
<body>

    <audio id="miMusica" loop>
        <source src="Viernes 13.mp3" type="audio/mpeg">
        Tu navegador no soporta audio.
    </audio>

    <div class="container">
        <img src="Tiffs.jpeg" alt="Nosotros" class="foto-amiga">
        
        <div class="audio-container">
            <button class="btn-musica" onclick="togglePlay()">🎵 Dale Play</button>
        </div>

        <h1>¡Lo siento mucho! 🥺</h1>
        
        <div class="mensaje-perdon">
            "Perdón por olvidarme con la fecha de San Valentín. Sabes que soy un despistado y mamerto, pero también sabes que te quiero demasiado y eres la mejor amiga del mundo."
        </div>

        <p style="font-size: 0.9rem;">Eres una persona increíble y no quería que pasara el día sin decirte lo importante que eres para mí.</p>

        <div class="pregunta-tena">
            ¿Me perdonas y vamos mañana juntos al Tena? 🌴🚗
        </div>

        <p class="firma">Con cariño, <br><strong>Juanfer</strong></p>
    </div>

    <?php
    for ($i = 0; $i < 15; $i++) {
        $left = rand(0, 95);
        $delay = rand(0, 7);
        $size = rand(15, 25);
        echo "<div class='floating-heart' style='left: {$left}%; animation-delay: {$delay}s; font-size: {$size}px;'>❤</div>";
    }
    ?>

    <script>
        function togglePlay() {
            var audio = document.getElementById("miMusica");
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }
    </script>

</body>
</html>