@extends('layouts.layout')
@section('title', 'High Fashion | Sobre nós')
@section('content')

    <x-site.navbar />

    <x-site.login />

    <div class="container">
        <h2 class="text-center display-4 m-5 text-navy">Sobre nós</h2>
        <div class="row">
            <div class="col-12 rounded text-center mt-lg-5">
                <img src="{{ asset('storage/imagem/banner/banner-5.png') }}" class="card-img" alt="banner">
            </div>
            <div class="col-12 d-flex">
                <p class="fs-5 mt-lg-1 text-navy text-center">
                    Estabelecida em São João Nepomuceno, 25/02/1972, a Empresa "High Fashion Confecções Ltda." foi fundada
                    por Gianni Givenchy e Yves Dior atuando principalmente na moda adulta feminina utilizando-se dos
                    conceitos de criar roupas práticas, confortáveis e que trouxessem consigo uma beleza cotidiana.
                    Iniciando com poucas máquinas, mas com muitas e ideias e criatividade a Empresa se destacou no mercado e
                    consequente expandiu seu parque fabril agregando máquinas de última geração, automação de processos e
                    utilização de softwares de design, criação e desenvolvimento.
                    No ano de 1994, Christian Vuitton (genro de Gianni) e Gabrielle Courrège (nora de Yves), entram para a
                    Sociedade e dão continuidade à visão de crescimento da Empresa. Já no ano 2000, a "High Fashion" começa a 
                    investir em Lojas próprias com uma coleção exclusiva direcionada à venda direta, sendo que em 2002 este 
                    segmento já respondia por 35% do faturamento da empresa.
                    Em 2009, uma nova oportunidade surge no horizonte da Empresa, que passa a ter franquias de sua marca o
                    que abre novos mercados para a Empresa.
                    Como última ação de marketing e agilidade dos processos, a "High Fashion" pretende lançar um site
                    institucional, que além de apresentar a Empresa para o mundo, também trará artigos e dicas de moda, um
                    canal de contato direto e uma funcionalidade de controle e gerenciamento de Fichas Técnicas o que será
                    um grande apoio para a área comercial.

                </p>
            </div>
        </div>
        <div class="row mt-4 mb-4 shadow-lg py-3">
            <h2 class="text-center display-4 mt-2 mb-5 text-navy">Localização</h2>
            <div class="col-lg-6 text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.6153806650786!2d-43.0160129236277!3d-21.522780189880535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa2926ff693c449%3A0xb15620c7671afbb!2sESCOLA%20SESI%20S%C3%83O%20JO%C3%83O%20NEPOMUCENO!5e0!3m2!1sen!2sbd!4v1680733879760!5m2!1sen!2sbd"
                    height="560" width="100%" allowfullscreen="">
                </iframe>
            </div>
            <div class="col-lg-6">
                <form action="/email" class="container" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h2 class="text-navy">Contato</h2>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="name" class="form-label text-navy">Nome</label>
                            <input type="text" name="name" class="form-control" id="name" required />
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="lastname" class="form-label text-navy">Sobrenome</label>
                            <input type="text" name="last_name" class="form-control" id="lastname" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="email" class="form-label text-navy">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="subject" class="form-label text-navy">Assunto</label>
                            <input type="text" name="subject" class="form-control" id="subject" required />
                        </div>
                        <div class="col-12 mb-2">
                            <label for="description" class="form-label text-navy">Enviar Mensagem</label>
                            <textarea class="form-control" name="message" id="description" rows="5" required></textarea>
                        </div>
                    </div>


                    <button type="submit" class=" btn-navy fs-4">Enviar</button>
                </form>

            </div>
        </div>
    
        <div class="row mt-3 g-2 justify-content-evenly">
            <h2 class="m-5 text-center display-5 text-navy">Nossas Lojas</h2>
            <div class="col-lg-3">
                <h4 class=" text-navy text-center">Minas Gerais</h4>
                <p class="mb-3 text-navy">Av. Barão do Rio Branco, 1235 - Juiz de Fora - CEP: 36125-080 - Telefone: (32)3211-3211; </p>
                <p class="mb-3 text-navy">Av. Getúlio Vargas, 852 - Juiz de Fora - CEP: 36852-123 - Telefone: (32)3235-5323; </p>
                <p class="mb-3 text-navy">Av. Cel. Souza, 521 - Bicas - CEP:36600-000 - Telefone: (32)3271-1723;  </p>
                <p class="mb-3 text-navy">Av. Savassy, 1258 Loja 108 - CEP: 34256-754 - Telefone: (31)4325-6547;  </p>
                <p class="mb-3 text-navy">R. Cel. José Dutra, 128 - S. J. Nepomuceno - CEP: 36680-000 - Telefone: (32)3261-9874;</p>
            </div>
            <div class="col-lg-3">
                <h4 class=" text-navy text-center">Rio de Janeiro </h4>
                <p class="mb-3 text-navy">Av. Atlântica, 2546 - Rio de Janeiro - CEP: 21258-456 Telefone: (21)2123-2321; </p>
                <p class="mb-3 text-navy">Av. Nossa Senha de Copacabana, 1874 - Rio de Janeiro CEP: 22587-632- Telefone: (21)3265-9632;  </p>
                <p class="mb-3 text-navy">Rua do Catete, 123 - Rio de Janeiro - CEP: 21123-321 - Telefone: (21)6932-7563; </p>
            </div>
            <div class="col-lg-3">
                <h4 class=" text-navy text-center">São Paulo </h4>
                <p class="mb-3 text-navy">Rua da Graça, 456/202 - São Paulo - CEP: 11587-756 - Telefone: (11)1236-7410; </p>
                <p class="mb-3 text-navy">Rua do Oriente, 857/104 - São Paulo - CEP: 12321-852 - Telefone: (11) 4256-9632 </p>
                
            </div>
        </div>
    </div>

    <x-site.footer />

@endsection
