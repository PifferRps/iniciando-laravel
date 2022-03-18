<html>
    <head>
        <body>
            <h1>Cliente</h1>
            <form action="/cadastro" method="post">
             {!! csrf_field()!!}
                <label for="nome">Nome</label>   
                <input type="text" name="nome" id="nome">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <button type="submit">Enviar</button>
        </body>
    </head>
</html>