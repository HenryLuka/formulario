<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Início</title>
</head>
<body>

    <div class="container">

        <div>
            <h1>Início</h1>
        </div>

            <div>
                <h3>Formulários Disponíveis</h3>
            </div>

                <div>
                    <ul>
                        @foreach ($forms as $form)
                            <li><p>{{$form->nome}} {{$form->sobrenome}}
                                [<a href="{{ route('form.show', $form->id) }}">Ver mais.</a>]</p>
                            </li>
                        @endforeach
                    </ul>        
                </div>

                    <div>
                        <a href="{{route('form.create')}}">Envie seu formulário</a><br>
                    </div>
                        
                <div>
                    <button><a href="{{route('form.panel')}}">Painel Admin</a></button>
                </div> 



    </div>  

    

</body>
</html>