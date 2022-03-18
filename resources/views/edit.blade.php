<html>
    <head>
        <body>
            <h1>Editar Cliente</h1>
            <form action="{{" /{$cliente->id}/editar"}}" method="post">
             {!! csrf_field()!!}
                <label for="nome">Nome</label>   
                <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="{{$cliente->email}}">
                <button type="submit" >Enviar</button>
        </body>
    </head>
</html>