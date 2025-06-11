<?php
if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'sesion_expirada') {
    echo "
    <script>
        alert('Tu sesión ha expirado por inactividad. Por favor, inicia sesión nuevamente.');
    </script>";
}
?>

<!DOCTYPE html>
        <html lang="es">
        
        <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Style Hub</title>
                <script src="js/registroCliente.js"></script>
            <!-- Material Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
            
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7669324338492240"
     crossorigin="anonymous"></script>
            
        <style>
/* Estilos generales */
body {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

header {
    -webkit-font-smoothing: antialiased; /* Para Chrome/Safari */
    -moz-osx-font-smoothing: grayscale; /* Para macOS */
    background-color: #f5f5f5; /* Gris claro */
    margin: 0;
    scroll-behavior: smooth;
    font-size: 1rem;
}

header nav {
    background: white; /* Fondo blanco para el nav */
    display: flex;
    justify-content: space-between; /* Alinea los elementos a los extremos */
    align-items: center; /* Centra verticalmente los elementos */
}

header nav div {
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
}

header ul {
    display: flex;
    list-style-type: none;
    gap: 25px; /* Espacio entre los enlaces */
}

nav img {
        max-width: 150px;
        margin-left: 100px;
}

/* Estilo de los botones */
.btn-flat.black-text {
    background-color: #EEE; /* Fondo color oscuro */
    padding: 5px 40px; /* Relleno alrededor del texto */
    border-radius: 30px; /* Bordes redondeados */
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.5);
    text-decoration: none;
    color: black;
}

.btn-flat.black-text.modal-trigger {
    background-color: #0048ff;
    padding: 5px 40px; /* Relleno alrededor del texto */
    border-radius: 30px; /* Bordes redondeados */
    color: white;
    text-decoration: none;
    margin-right:20px;
}

/* Estilo para pantallas pequeñas (móviles) */
@media (max-width: 480px) {

    /* Configuración del contenedor del nav */
    /* Configuración del contenedor del nav */
header nav {
    display: flex;               /* Flexbox para organizar elementos */
    flex-direction: column;      /* Apila los elementos verticalmente */
    align-items: center;         /* Centra los elementos horizontalmente */
    justify-content: center;     /* Centra los elementos verticalmente */
    height: auto;                /* Asegura que ocupe todo el espacio vertical disponible */
    gap: 1rem;                   /* Espacio entre los elementos del nav */
}

/* Ajuste de la imagen del logo */
nav img {
    max-width: 40%;              /* Reduce el tamaño máximo al 50% */
    margin-left: 50%;           /* Ajusta la separación a la derecha */
    display: block;              /* Asegura que se comporte como un bloque */
}

    /* Botones */
    .btn-flat.black-text,
    .btn-flat.black-text.modal-trigger {
        padding: 0.8em 2em;          /* Relleno adaptativo basado en la fuente */
        font-size: 0.5rem;           /* Tamaño de letra reducido */
        text-align: center;          /* Centra el texto dentro del botón */
        white-space: nowrap;         /* Evita que el texto del botón se corte o salte de línea */
        margin: 0;                   /* Elimina márgenes extras */
    }
}

/* Estilo general para el modal */
#loginModal {
    display: none; /* Inicialmente oculto */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Esto centra el modal en la pantalla */
    background-color: #fff;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px; /* Máximo ancho */
    z-index: 9999;
}

/* Fondo oscuro cuando el modal está activo */
.modal-overlay {
    background-color: rgba(0, 0, 0, 0.5);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9998;
}

/* Estilo del encabezado */
#loginModal h1 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Estilo del botón de cerrar */
#loginModal button.modal-close {
    background-color: transparent;
    border: none;
    font-size: 24px;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

#loginModal button.modal-close i {
    color: #333;
}

/* Estilo para los campos de entrada dentro del modal */
#loginModal .input-field {
    margin-bottom: 20px;
}

#loginModal .input-field input {
    border-radius: 30px;
    border: 1px solid #ddd;
    padding: 10px 0px;
    font-size: 1rem;
    width: 100%;
}

#loginModal .input-field input:focus {
    border-color: #0D0028; /* Color de enfoque */
    box-shadow: 0 0 5px rgba(13, 0, 40, 0.5);
}

/* Estilo del botón de envío dentro del modal */
#loginModal button.btn {
    background-color: #0D0028; /* Fondo color oscuro */
    color: white;
    border-radius: 30px;
    padding: 10px 20px;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
}

#loginModal button.btn:hover {
    background-color: #333;
}

#loginModal button.btn i {
    margin-right: 10px;
}

/* Estilo del enlace para registrarse dentro del modal */
#loginModal p.center-align a {
    color: #0D0028;
    font-weight: bold;
}

#loginModal p.center-align a:hover {
    text-decoration: underline;
}

    /* Media query para pantallas más pequeñas (dispositivos móviles) */
@media (max-width: 768px) {
    #loginModal {
        max-width: 80%; /* El modal ocupa más ancho en pantallas pequeñas */
    }

    #loginModal h1 {
        font-size: 1.3rem; /* Reduce el tamaño del título */
    }

    #loginModal .input-field input {
        font-size: 0.5rem; /* Ajusta el tamaño de la fuente de los inputs */
    }

    #loginModal button.btn {
        font-size: 1rem; /* Reduce el tamaño del botón */
    }
}

.toggle-password {
    position: relative;
    display: inline-block;
    width: 100%;
}

.toggle-password .material-icons {
    position: absolute;
    top: 40%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    color: gray;
}

            .seccion-fondo {
            position: relative;
            width: 100%; /* Ocupa todo el ancho disponible */
            height: 300px; /* Puedes ajustar la altura según tus necesidades */
            overflow: hidden;
        }
        
        .seccion-fondo {
            position: relative;
            width: 100%;
            height: 100vh; /* Ajuste para que ocupe toda la pantalla */
            overflow: hidden;
        }
        
        .imagen-fondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Asegura que la imagen cubra todo el área sin deformarse */
            z-index: -1;
        }
        
        .texto-bienvenida {
    text-align: left; /* Alineación a la izquierda */
    margin-bottom: 20px; /* Ajusta la distancia entre el texto y el formulario */
    margin-top: 170px;
    margin-left: 80px; /* Ajuste para mover el texto hacia la izquierda */
    font-size:30px;
}

.contenido-superpuesto {
    position: relative;
    z-index: 1; /* Asegura que este contenido esté encima de la imagen */
    color: white; /* Color de texto para que se vea sobre la imagen */
    padding: 20px;
    width: 100%; /* Se asegura de que ocupe todo el ancho */
    box-sizing: border-box; /* Para no afectar los márgenes */
}

.search-form {
    margin-top: 10px;
    display: inline-block;
    position: relative;
    width: 35%; /* Ajusta el ancho según prefieras */
    margin-left: 80px; /* Alineación a la izquierda */
}

.search-form .input-field {
    display: flex;
    align-items: center;
    background-color: #FFF;    
    border-radius: 40px;
    padding: 10px 10px;
}

.search-form input[type="search"] {
    border: none;
    outline: none;
    font-size: 16px;
    flex: 1;
    padding: 10px;
    border-radius: 25px;
}

.search-form .search-button {
    background: none;
    border: none;
    cursor: pointer;
    color: #333;
    font-size: 24px;
    margin-left: 5px;
}

.search-form input[type="search"]::placeholder {
    color: #666;
}

/* Responsividad para pantallas más pequeñas */
@media (max-width: 480px) {
    .texto-bienvenida {
        font-size: 25px; /* Reducir el tamaño del texto aún más */
        margin-left: 10px; /* Alineación más ajustada */
        margin-top: 50px; /* Reducir espacio en la parte superior */
    }

    .search-form {
        width: 80%; /* Hacer que el formulario de búsqueda ocupe más espacio */
        margin-left: 10px; /* Ajuste de margen */
    }

    .search-form .input-field {
        padding: 5px; /* Ajuste del padding en pantallas muy pequeñas */
    }

    .search-form input[type="search"] {
        font-size: 14px; /* Reducir el tamaño de la fuente del campo de búsqueda */
    }

    .search-form .search-button {
        font-size: 18px; /* Ajuste del tamaño del botón de búsqueda */
    }
} 


/* Contenedor principal de la sección */
.container.section {
    padding: 50px 20px;
    text-align: center;
}

/* Título de la sección */
.container.section h5 {
    font-size: 2rem;
    margin-bottom: 30px;
    color: #333;
    text-align:center;
}

/* Estilo del contenedor del carrusel */
.carousel-controls {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
}

/* Flechas de navegación */
.carousel-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3rem;
    color: #333;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    padding: 10px;
    transition: background-color 0.3s ease;
}

.carousel-arrow:hover {
    background-color: rgba(255, 255, 255, 1);
}


/* Flecha izquierda */
#prevButton {
    left: 10px;
}

/* Flecha derecha */
#nextButton {
    right: 10px;
}

/* Contenedor de las tarjetas */
.carousel-container {
    display: flex;
    overflow: hidden;
    width: 92%;
    justify-content: center;
}

/* Contenedor de las tarjetas individuales */
.carousel-wrapper {
    display: flex;
    transition: transform 0.5s ease;
}

/* Tarjetas */
.carousel-cards {
    display: flex;
    gap: 15px;
}

/* Estilo de cada tarjeta */
.card {
    position: relative;
    width: 200px;
    height: 300px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.card:hover {
    transform: scale(1.05);
}

.card-image {
    width: 100%;
    height: 100%;
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Asegura que las imágenes dentro del carrusel no se deformen */
.card img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

/* Resaltar las tarjetas en el centro */
.carousel-wrapper {
    display: flex;
    gap: 20px;
}

/* Media query para pantallas pequeñas (móviles) */
@media (max-width: 768px) {
    .container.section h5 {
        font-size: 1.2rem; /* Reduce aún más el tamaño del título */
        text-align:center;
    }

    .carousel-arrow {
        font-size: 1.5rem; /* Flechas más pequeñas */
        padding: 5px; /* Ajusta el padding de las flechas */
    }

    .carousel-container {
        width: 100%; /* El carrusel sigue ocupando todo el ancho */
    }

    .card {
        width: 120px; /* Reducción del tamaño de las tarjetas */
        height: 180px; /* Reducción de la altura de las tarjetas */
    }

    /* Ajusta el espaciado entre las tarjetas */
    .carousel-cards {
        gap: 8px;
    }

    /* Opcional: Ajusta las flechas para que no interfieran con el contenido */
    #prevButton, #nextButton {
        font-size: 1.5rem; /* Hacer las flechas más pequeñas */
        padding: 6px;
    }
    
    footer {
        text-align:center;
        font-size:10px;
    }
}

    
    footer {
                    background-color: red; /* Fondo blanco para el footer */
                    border-top: 2px solid white; /* Cambiar borde superior a blanco */
                    padding: 10px 0;
                    text-align:center;
                }
        
                footer p {
                    color: #000000; /* Color negro para el texto del footer */
                }
        </style>
        </head>
        
        <body>
            <header>
            <nav>
                <div>
                    <a href="#"><img src="img/Component 1.png" alt="STYLIFY"></a>
                    <ul>
                        <li><a href="registrocliente.php" class="btn-flat black-text">REGISTRATE</a></li>
<li><a href="#" id="openModalBtn" class="btn-flat black-text modal-trigger">INICIAR SESIÓN</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        
            <div class="espaciador"></div>
        
        
            <div class="seccion-fondo">
            <img src="img/index.jpeg" alt="Imagen de fondo" class="imagen-fondo">
            <div class="contenido-superpuesto">
               <div class="texto-bienvenida">
            <h2>ENCUENTRA TU ESTILO CERCA DE TI</h2>
            <p>El mejor lugar para agendar tus citas de estilo.</p>
        </div>
        
                
                 <!-- Barra de búsqueda -->
        <form class="search-form" action="negociosBuscados.php"  method="GET">
                    <div class="input-field">
                        <input id="search" type="search" name="query" placeholder="Buscar servicios" required>
                        <button type="submit" class="search-button"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
        </div>
        
        
            <!-- Contenido Principal -->
            <main>
                <!-- Modal de Inicio de Sesión -->
<div id="loginModal" class="modal" style="display: none;">
    <button class="modal-close">
        <i class="material-icons">close</i>
    </button>
    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="post">
        <div class="input-field">
            <label for="correoelectronico">Correo Electrónico</label>
            <input id="correoelectronico" name="correoelectronico" type="email" required placeholder="Ingresa tu correo">
        </div>
        <div class="input-field toggle-password">
            <label for="contrasenia">Contraseña</label>
            <input id="contrasenia" name="contrasenia" type="password" required placeholder="Ingresa tu contraseña">
            <span class="material-icons" id="toggleIcon">visibility_off</span>
        </div>
        <button class="btn waves-effect waves-light" type="submit">
            Iniciar sesión
        </button>
    </form>
    <p class="center-align">¿Olvidaste Tu Contraseña? <a href="send-email-pwd.html" class="green-text">Recuperala aqui</a></p>
</div>
        
               <!-- Carousel de Cards -->
            
        <section class="container section">
    <h5 class="center-align">Recomendaciones de los usuarios</h5>
    <div class="carousel-controls">
        <!-- Flecha izquierda para ir a la tarjeta anterior -->
        <span id="prevButton" class="carousel-arrow">
            <i class="material-icons">chevron_left</i>
        </span>
        
        <div class="carousel-container">
            <!-- Contenedor de las tarjetas -->
            <div class="carousel-wrapper">
                <div class="carousel-cards">
                    <!-- Tarjetas individuales (solo con imágenes) -->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/1.jpg" alt="Recomendación 1">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/2.jpg" alt="Recomendación 2">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/3.jpg" alt="Recomendación 3">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/4.jpg" alt="Recomendación 4">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/5.jpg" alt="Recomendación 5">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/1.jpg" alt="Recomendación 6">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/2.jpg" alt="Recomendación 7">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/3.jpg" alt="Recomendación 8">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/4.jpg" alt="Recomendación 9">
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="img/5.jpg" alt="Recomendación 10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Flecha derecha para ir a la tarjeta siguiente -->
        <span id="nextButton" class="carousel-arrow">
            <i class="material-icons">chevron_right</i>
        </span>
    </div>
</section>

    <script>
    // Obtener el modal y el botón de abrir
    const modal = document.getElementById('loginModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.querySelector('.modal-close');
    
    // Función para abrir el modal
    function openModal() {
        modal.style.display = 'block';  // Cambia a 'block' para mostrar el modal
    }

    // Función para cerrar el modal
    function closeModal() {
        modal.style.display = 'none';  // Cambia a 'none' para ocultar el modal
    }

    // Cuando se hace clic en el botón de abrir modal
    openModalBtn.addEventListener('click', openModal);

    // Cuando se hace clic en el botón de cerrar dentro del modal
    closeModalBtn.addEventListener('click', closeModal);

    // Si se hace clic fuera del modal, también se cierra
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Manejar el envío del formulario de inicio de sesión
    const loginForm = document.querySelector('#loginModal form');
    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(loginForm);

        fetch('procesar_login.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                if (data.role === 'Cliente') {
                    window.location.href = 'cliente.php';
                } else if (data.role === 'Administrador') {
                    window.location.href = 'admin.php';
                } else if (data.role === 'Negocio') {
                    window.location.href = 'negocio.php';
                }
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    document.getElementById('toggleIcon').addEventListener('click', function() {
        const passwordInput = document.getElementById('contrasenia');
        const icon = this;

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.textContent = 'visibility';
        } else {
            passwordInput.type = 'password';
            icon.textContent = 'visibility_off';
        }
    });
</script>

<script>

const carouselWrapper = document.querySelector('.carousel-wrapper');
const cards = document.querySelectorAll('.card');
const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');

let currentIndex = 0;
const totalCards = cards.length; // Total de tarjetas
const cardWidth = cards[0].offsetWidth + 5; // Ancho de la tarjeta + margen (ajusta si necesario)
const visibleCards = Math.floor(carouselWrapper.parentElement.offsetWidth / cardWidth); // Tarjetas visibles al mismo tiempo

// Función para actualizar el estado de los botones
function updateButtons() {
    // Deshabilitar el botón "prev" si estamos al inicio
    prevButton.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
    prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';

    // Deshabilitar el botón "next" si estamos en el final
    const maxIndex = totalCards - visibleCards;
    nextButton.style.pointerEvents = currentIndex >= maxIndex ? 'none' : 'auto';
    nextButton.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
}

// Mover al siguiente elemento
nextButton.addEventListener('click', () => {
    const maxIndex = totalCards - visibleCards;
    if (currentIndex < maxIndex) {
        currentIndex++;
        const offset = -(currentIndex * cardWidth);
        carouselWrapper.style.transform = `translateX(${offset}px)`;
    }
    updateButtons();
});

// Mover al elemento anterior
prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        const offset = -(currentIndex * cardWidth);
        carouselWrapper.style.transform = `translateX(${offset}px)`;
    }
    updateButtons();
});

// Inicializar el estado de los botones
updateButtons();

        </script>
        
        
            </main>
        
            <!-- Footer -->
            <footer class="page-footer">
                <div class="container center-align">
                    <p class="white-text">© 2024 STYLIFY. Todos los derechos reservados.</p>
                </div>
            </footer>
        
            <!-- Materialize JS -->


        <script src="https://cdn.userway.org/widget.js" data-account="m8Iro8JJU5"></script>
        
        </body>
        
        </html>
