<!DOCTYPE html>
<html>
<head>
<style>
    body {
    background-color: #0B2447;
    font-family: Arial,sans-serif;
    }

    h1 {
        color: #f1f1f1;
        margin-bottom: 50px;
    }
    div {
        border: 2px solid #2552a5 ;
        border-radius: 8px;
        padding: 20px;
    }
    p {
        color: #f1f1f1;
        font-size: 20px;
    }
</style>
</head>
<body>
    <div >
        <h1>High Fashion</h1>

        <p><strong>De:</strong> {{$email}} </p>

        <p><strong>Para:</strong> high_fashion@gmail.com</p>

        <p>Olá High Fashion, meu nome é {{$nome}} assim que possivel entrar em contato comigo.</p>

        <p><strong>Assunto:</strong> {{$assunto}}</p>

        <p><strong>Mensagem:</strong> {{$mensagem}}</p>
    </div>
</body>
</html>