<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Biblioteca de Artículos') }}</title>

    @vite(['resources/css/app.css', 'resources/css/diseno.css', 'resources/js/app.js'])
</head>

<body>


    <div id="pantalla-carga">
        <div class="book">
            <div class="book__pg-shadow"></div>
            <div class="book__pg"></div>
            <div class="book__pg book__pg--2"></div>
            <div class="book__pg book__pg--3"></div>
            <div class="book__pg book__pg--4"></div>
            <div class="book__pg book__pg--5"></div>
        </div>

        <h1 class="texto-cargando">Cargando<span class="dot1">.</span><span class="dot2">.</span><span class="dot3">.</span></h1>
    </div>

<!-- Agregar cualquier script JS que sea necesario -->

<form style="display:flex; gap:10px; justify-content:center; margin:20px;">
    <input type="text" placeholder="Buscar libros o usuarios..." style="padding:10px; width:300px;">
    <button type="submit" style="padding:10px;">🔍</button>
</form>
    <!-- Agregar cualquier script JS que sea necesario -->

<div class="contenido">
<form action="#" method="get" class="formulario-resena">

<!-- trabajo mich  -->
<button class="Boton_editar" type="button">editar</button>


<!-- de aqui para abajo no se mueve  -->

    <button class="boton_subir" >subir</button>


            <div class="caja-texto">
                <label for="opinion">Escribe tu reseña:</label>
                <br>
                <textarea id="opinion" name="opinion" rows="4" cols="50" placeholder="¿Qué te pareció el artículo?"></textarea>
            </div>
            <div class="rating">
                <input value="5" name="rate" id="star5" type="radio">
                <label title="text" for="star5"></label>
                <input value="4" name="rate" id="star4" type="radio">
                <label title="text" for="star4"></label>
                <input value="3" name="rate" id="star3" type="radio">
                <label title="text" for="star3"></label>
                <input value="2" name="rate" id="star2" type="radio">
                <label title="text" for="star2"></label>
                <input value="1" name="rate" id="star1" type="radio">
                <label title="text" for="star1"></label>
            </div>

            <br>
            <button type="submit" class="btn-enviar">enviar reseña </button>

        </form>
    </div>



  
    <script>
        // Esto espera a que tu página termine de cargar
        window.addEventListener('load', function() {
            const pantallaCarga = document.getElementById('pantalla-carga');

            // Le damos 2 segundos (2000 milisegundos) para que el usuario alcance a ver el libro
            setTimeout(() => {
                pantallaCarga.classList.add('oculto'); // Le pone la clase para desaparecer
            }, 2000);
        });
    </script>
</body>

</html>