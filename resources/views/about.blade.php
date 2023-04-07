<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Sobre nós</title>
</head>
<body>
    <x-site.navbar />
    <div class="container">
        <h2 class="text-center display-4 m-5">Sobre nós</h2>
        <div class="row">
            <div class="col-12 rounded text-center mt-lg-5">
                <img src="{{asset('storage/imagem/banner/banner-5.png')}}" class="card-img"  alt="banner">
            </div>
            <div class="col-12 d-flex">
                <p class="fs-5 mt-lg-1 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nobis exercitationem eum facere nulla blanditiis saepe, ullam assumenda vero nemo dolorum necessitatibus 
                    repudiandae laborum, excepturi ipsa nam natus, veritatis repellat fuga! Nemo perferendis accusamus, corrupti 
                    facere optio provident maiores ipsa enim excepturi praesentium dolores doloremque animi natus rem! A nisi, 
                    qui fugit, aliquid sequi, quidem temporibus dignissimos voluptatem nostrum corrupti praesentium.
                    Non, cupiditate! Suscipit inventore minus qui sed consequatur laboriosam labore est nobis. Consequuntur 
                    eveniet est sit corrupti nesciunt placeat, accusantium voluptatibus eaque obcaecati laborum ducimus 
                    consequatur id asperiores, fugiat aut. Perspiciatis esse quaerat facere doloribus incidunt consectetur ipsa 
                    voluptas reprehenderit exercitationem ut illum ad, officiis voluptatum, dolorum ab eum minus impedit. Officiis, 
                    iste. Modi beatae repellendus tenetur delectus deleniti nobis.Ratione corporis deleniti id eaque tenetur eius,
                    assumenda quo illum libero amet minus ipsum doloremque quod dolor non aut praesentium dignissimos dicta! Quae nulla 
                    voluptatum laudantium obcaecati quisquam aliquid excepturi? Architecto minima recusandae dolorem magnam ex quaerat 
                    modi aliquid delectus voluptate incidunt reprehenderit officiis sit nobis ut assumenda consectetur quidem, eaque 
                    quibusdam voluptatibus iure voluptatum? Deserunt cupiditate dolores inventore harum! Nihil exercitationem odit sapiente 
                    facilis quam necessitatibus repudiandae recusandae, ea, aperiam natus asperiores distinctio ducimus voluptate doloremque 
                    ipsum dolor nobis dolores maiores quasi cumque tempora. Excepturi minima nostrum iure tempore. Ab dolorem accusamus qui 
                    voluptate doloremque? Earum deleniti excepturi cum fugit ad perferendis totam voluptas quisquam incidunt labore! Debitis 
                    cumque officia, consequatur aspernatur dolorum facere obcaecati ea dolore sequi corrupti. Dignissimos voluptates adipisci eum 
                    aliquid architecto veniam aperiam deserunt veritatis tempora, totam magnam cumque pariatur qui reiciendis mollitia a esse rerum
                    enim, eveniet accusamus officiis id. Tempore dicta modi excepturi.
                </p>
            </div>
        </div>
        <div class="row mt-3 shadow-lg py-3">
            <h2 class="text-center display-4 mt-2 mb-5">Localização</h2>
            <div class="col-lg-6 text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.6153806650786!2d-43.0160129236277!3d-21.522780189880535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa2926ff693c449%3A0xb15620c7671afbb!2sESCOLA%20SESI%20S%C3%83O%20JO%C3%83O%20NEPOMUCENO!5e0!3m2!1sen!2sbd!4v1680733879760!5m2!1sen!2sbd"
                    height="560" width="100%"  allowfullscreen="">
                </iframe>
            </div>
            <div class="col-lg-6">
                <form action="#" class="container" method="post">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h2 >Contato</h2>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" required />
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Assunto</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Enviar Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary fs-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <x-site.footer />
</body>
</html>