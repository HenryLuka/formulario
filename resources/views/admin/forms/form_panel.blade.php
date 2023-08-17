<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de Formulários</title>
</head>
<body>  

    @if (session('delete'))

    <div>
        {{session('delete')}}
    </div>
        
    @endif

    <div>
        <h3>Formulários Cadastrados</h3>
    </div>

        <div>
            <ul>
                @foreach ($forms as $form)
                    <li><p>{{$form->nome}} {{$form->sobrenome}}
                        [ <a href="{{route('form.editor', $form->id)}}">Editar</a> ]
                    </li>
                @endforeach
            </ul>        
        </div>

</body>
</html>