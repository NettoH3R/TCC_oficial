<?php
// require './vendor/autoload.php';

// use Application\DBConnection\MySQLConnection;

// $db = new MySQLConnection();


include("includes/header.php");

?>

<div class="container">
            <main class="main">
                <div class="tamanhoCarrosel">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="Músicas mais visualizadas">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 1</h5>
                                    <p>Um breve descrição da música 1.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="Músicas mais visualizadas">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 2</h5>
                                    <p>Um breve descrição da música 2.</p>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="img/logo/download.jpg" class="d-block w-100" alt="Músicas mais visualizadas">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Exemplo Música 3</h5>
                                    <p>Um breve descrição da música 3.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
                <div class="quadradinhos">
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                    <div class="quadradinho">
                        <img src="img/logo/album.jpg" class="album" alt="Possível álbum a ser colocado">
                    </div>
                </div>
            </main>
        </div>

<?php

include('includes/footer.php')

?>