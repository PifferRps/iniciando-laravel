<html>
    <head>
        <body>
            <p>Listar Clientes</p>
            <a href="form">Novo CLiente</a>
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>

                </tr>
            </thead>
            <body>
                @foreach($cliente as $clients)
                    <tr>
                        <td>{{$clients->id}}</td>
                        <td>{{$clients->nome}}</td>
                        <td>{{$clients->email}}</td>
                        <td>
                            <a href="{{"{$clients->id}/editar"}}">Editar</a> |
                            <a href="{{"{$clients->id}/excluir"}}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </body>
            </table>
        </body>
    </head>
</html>