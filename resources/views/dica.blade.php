@extends('layouts.layout')
@section('title', 'Dica de Moda')
@section('content')
    <x-site.navbar />

    <x-site.login/>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <h3>1. Esqueça que os básicos são só o preto e o branco</h3>
                <img src="{{asset('storage/imagem/dica/truques-de-moda-1.jpg')}}" class="card-img" alt="truques-de-moda-1">
                <p class="fs-4">
                    Para não errar, o preto e o branco têm lugar cativo no guarda-roupa de todo mundo. 
                    Com essas duas cores podemos combinar todas as outras existentes, fazer uma composição
                    monocrática ou apostar no combo clássico, preto e branco. Mas sabia que dá pra ser 
                    básica fugindo dessas duas cores? Aposte em outras cores neutras para variar um pouco.
                    O azul marinho, os tons de nude, off white e variações de cinza são ótimas opções para 
                    quem não é adepta de um visual muito colorido.
                </p>
            </div>
            <div class="col-12 mt-3">
                <h3>2. Brinque com diferentes tecidos e suas texturas</h3>
                <img src="{{asset('storage/imagem/dica/truques-de-moda-2.jpg')}}" class="card-img" alt="truques-de-moda-2">
                <p class="fs-4">
                    Tecidos como o algodão são ótimos para os dias mais quentes e são extremamente confortáveis.
                    Que tal combinar a camiseta básica com outra peça que não seja a calça jeans? Tem tudo para 
                    ser uma composição mais descontraída e muito menos óbvia. O combo peça básica + peça formal 
                    deixa o look mais arrumadinho e cool ao mesmo tempo
                </p>
            </div>
            <div class="col-12 mt-3">
                <h3>3. A terceira peça pode fazer milagres</h3>
                <img src="{{asset('storage/imagem/dica/truques-de-moda-3.jpg')}}" class="card-img" alt="truques-de-moda-3">
                <p class="fs-4">
                    Quando você vai se vestir, geralmente as escolhas não passam de um vestido ou de uma blusa 
                    e a parte de baixo, seja saia, calça ou shorts, certo? A produção pode ficar muito mais 
                    interessante se você jogar uma terceira peça. Uma jaquetinha, um blazer ou até mesmo um 
                    colete, se o dia estiver quente. A terceira peça demonstra um esforço em criar um look 
                    diferente e que fuja da mesmice.
                </p>
            </div>
            <div class="col-12 mt-3">
                <h3>4. Feminilidade nem sempre tem a ver com “mulherzinha”</h3>
                <img src="{{asset('storage/imagem/dica/truques-de-moda-4.jpg')}}" class="card-img" alt="truques-de-moda-4">
                <p class="fs-4">
                    Você leu a palavra feminilidade e já pensou em um vestido rodado com estampa floral?
                    Pode esquecer! Feminilidade tem a ver com se sentir mulher mesmo estando de moletom 
                    e calça jeans. Feminilidade tem a ver com leveza e fluidez. Se você não é delicada, 
                    não significa que você é menos mulher por causa disso. E, claro, a delicadeza também 
                    sempre vai ter o seu lugar.
                </p>
            </div>
            <div class="col-12 mt-2">
                <h3 id="aboutWhoYou">5. Os acessórios dizem muito sobre quem você é</h3>
                <img src="{{asset('storage/imagem/dica/truques-de-moda-5.jpg')}}" class="card-img" alt="truques-de-moda-5">
                <p class="fs-4">
                    Um bom par de brincos e um colar deixam uma produção básica mais chique e completa. 
                    Muitas vezes um acessório diz mais sobre você do que a roupa que está usando, eles 
                    dizem se você é adepta de um estilo mais moderno, romântico, extravagante ou casual. 
                    Dependendo do acessório, ele pode até funcionar como uma terceira peça, como falamos 
                    ali em cima. Invista em acessórios, eles são peças-chave no seu estilo.
                </p>
            </div>
        
           
        </div>
    </div>
    
    <x-site.footer />
    
@endsection