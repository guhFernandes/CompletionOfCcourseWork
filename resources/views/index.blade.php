<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>High Fashion</title>
</head>
<body>
    <!-- Inicio do nav -->
    <nav class="navbar navbar-expand-lg bg-primary py-4">
        <div class="container-fluid ">
            <a href="index.html" class="me-5"><img src="src/imagem/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="row collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="col-lg-11 navbar-nav">
                    <li class="nav-item text-center">
                        <a class="nav-link text-white fs-4" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link text-white fs-4" aria-current="page" href="produtos.html">Produtos</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link text-white fs-4" href="#aboutUs">Sobre nós</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link text-white fs-4" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link text-white fs-4" href="#dicademoda">Dica de Moda</a>
                    </li>
                </ul>
                <ul class="col-lg-1 navbar-nav">
                    <li class="nav-item float-end text-center">
                        <button class="btn btn-info text-white fs-4">Login</button>
                    </li>
                </ul>   
            </div>
        </div>
    </nav>
    <!-- Fim do nav -->

    <!-- Inicio do carrossel -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="src/imagem/banner/banner-1.png" class="d-block w-100"  alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="src/imagem/banner/banner-2.png" class="d-block w-100 "  alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do carrossel -->

    <h1 class="display-6 m-5 text-center">Produtos</h1>

    <!-- Inicio Cards Moved -->
    <div id="carouselExampleControls" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-evenly container-sm">
                    <div class="card overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Bermuda</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/blazer.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Blazer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/blusa.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Blusa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/body.jpg " class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Body</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class=" d-flex justify-content-evenly container-sm">
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/bolsa.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Bolsa</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/calca.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Calça</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/colete.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Colete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/jaqueta.jpg " class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Jaqueta</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class=" d-flex justify-content-evenly container-sm">
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/jardineira.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Jardineira</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/macacao.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Macação</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/sandali.jpg" class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Sandalia</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card h-100 overflow-hidden rounded-4 shadow-lg" style="width: 18rem;">
                        <img src="src/imagem/roupa/short.jpg " class="img-card" alt="">
                        <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                            <ul class=" list-unstyled mt-auto">
                                <li class="text-center">
                                    <a class="btn btn-primary fs-5" href="#" role="button">Short</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark p-4 rounded-4 " aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark  p-4 rounded-4" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Fim Cards Moved -->

    <h1 class="display-6 m-5 text-center">Produtos em destaque</h1>

    <!--Inicio Cards Fixed-->
    <div class="container" id="custom-cards">
        <div class="row align-items-stretch g-3  ">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card h-100 overflow-hidden rounded-4 shadow-lg">
                    <img src="src/imagem/roupa/bermuda.jpg" class="img-card" alt="">
                    <div class="d-flex flex-column h-100 p-3 pb-0 text-shadow-1">
                        <ul class=" list-unstyled mt-auto">
                            <li class="text-dark">
                                <h4 class="card-title fs-4">Bermuda rosa feminina</h4>
                                <p class="card-text fs-4">R$60,00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
    <!--Fim Cards Fixed-->

    <!-- Inicio do Dica de Moda -->
    <div class="container">
        <div class="row mt-5 text-justify">
            <div class="col-lg-5">
                <img src="src/imagem/banner/banner-3.png" class="card-img" width="500" height="500" alt="">
            </div>
            <div class="col-lg-7  m-auto">
                <h1 id="dicademoda">Dica de Modas</h1>
                <p class="lh-base fs-5"> 
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dicta 
                    impedit velit officia veritatis asperiores nobis doloremque vel, corporis, 
                    quia porro sequi consequatur laudantium dolore cumque voluptatibus sapiente 
                    eligendi aliquid? Atque corrupti illo blanditiis eveniet eos, possimus fuga 
                    sint iure! Tempore sequi enim consequatur sunt distinctio, explicabo ex vero 
                    maxime ab dolorem debitis veritatis reiciendis culpa dignissimos! Quo, dolorum 
                    commodi. Voluptates, cumque! Architecto, vel. Aliquam neque tempore nisi corrupti 
                    facilis tenetur facere ipsam fugit ab, quod, enim aliquid doloremque odit molestiae 
                    adipisci dolorem in? Saepe ut facilis fugiat at temporibus!
                </p>
                <div class="text-center">
                    <a class="btn btn-primary fs-3" href="#" role="button">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="row mt-3 text-justify">
            <div class="col-lg-7 m-auto">
                <h1 id="aboutUs">Institucional</h1>
                <p class="lh-base fs-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, dicta 
                    impedit velit officia veritatis asperiores nobis doloremque vel, corporis, 
                    quia porro sequi consequatur laudantium dolore cumque voluptatibus sapiente 
                    eligendi aliquid? Atque corrupti illo blanditiis eveniet eos, possimus fuga 
                    sint iure! Tempore sequi enim consequatur sunt distinctio, explicabo ex vero 
                    maxime ab dolorem debitis veritatis reiciendis culpa dignissimos! Quo, dolorum 
                    commodi. Voluptates, cumque! Architecto, vel. Aliquam neque tempore nisi corrupti 
                    facilis tenetur facere ipsam fugit ab, quod, enim aliquid doloremque odit molestiae 
                    adipisci dolorem in? Saepe ut facilis fugiat at temporibus!
                </p>
                <div class="text-center">
                    <a class="btn btn-primary fs-3" href="#" role="button">Saiba mais</a>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="src/imagem/banner/banner-4.png" class="card-img"  width="500" height="500" alt="">
            </div>
        </div>
    </div>
    <!-- Fim do Dica de Moda -->

    <!-- Inicio do Footer -->
    <footer class="bg-primary mt-5 py-4">
        <div class="container-fluid mt-5 ">
            <div class="row text-center">
                <div class="col-lg-3 mb-3">
                    <img src="src/imagem/logo.png" class="img-card" width="240" height="100" alt="logo">
                </div>
                <div class="col-lg-3 mb-3">
                    <h2 class="text-white">Contato</h2>
                    <ul class="list-unstyled fs-5">
                        <li class="text-white">Rua XXXXXXX, 28 SP-Brasil</li>
                        <li class="text-white">highfasiion@highfashiion.com.br</li>
                        <li class="text-white">(32) 3261 - 1234</li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <h2 class="text-white">Link</h2>
                    <ul class="list-unstyled fs-5">
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href=""><li class="text-white">Home</li></a>
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href=""><li class="text-white">Produto</li></a>
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href=""><li class="text-white">Sobre nós</li></a>
                        <a class="link-offset-2 link-underline link-underline-opacity-0" href=""><li class="text-white">Ajuda</li></a>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <h2 class="text-white">Midia Social</h2>
                    <ul class="list-unstyled fs-5">
                        <a href=""><li><img src="src/imagem/icon/facebook.png" width="40" height="40" alt="facebook"></li></a>
                        <a href=""><li><img src="src/imagem//icon/instagram.png" width="40" height="40" alt="instagram"></li></a>
                        <a href=""><li><img src="src/imagem/icon/twitter.png" width="40" height="40" alt="twitter"></li></a>
                    </ul>
                </div>
                <div class="col-12 mt-2">
                   <p class="text-white fs-5"> &copy; <script>  now = new Date, document.write(now.getFullYear())</script> | high fashion confecções ltda</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fim do Footer -->
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>