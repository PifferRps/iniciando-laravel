<html>
    <head>
        <body>
            <p>Listar Cliente</p>
            <a href="form">Novo CLiente</a>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>

                </tr>
            </thead>
            <body>
                @foreach($cliente as $clients)
                    <tr>
                        <td>{{$clients->id}}</td>
                        <td>{{$clients->nome}}</td>
                        <td>{{$clients->email}}</td>
                    </tr>
                @endforeach
            </body>
            </table>
        </body>
    </head>
</html>