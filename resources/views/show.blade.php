<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes</title>
</head>
<body>
    
    <h1>Detalhes do Formulário de {{ $form->nome }}</h1>

    <h3>{{ $form->nome }} {{ $form->sobrenome }}</h3>

    <p>{{ $form->descricao }}</p>

    <div>
        <img src="{{url("storage/perfil_form/{$form->image}")}}" alt=" {{$form->nome}}" style="max-width:100px">
    </div>

    <br><a href="{{ route('form.index') }}">Voltar para página inicial.</a>
</body>
</html>