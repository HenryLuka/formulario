<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>
</head>
<body>  

    

    <form action="{{route('form.store')}}" method="post" enctype="multipart/form-data">
        
        @csrf
        <label for="image">Imagem de Apresentação: </label>
            <input type="file" name="image" id="image"><br><br>
                <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" value="{{old('nome')}}"><br><br>
                        <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="{{old('sobrenome')}}"><br><br>
                <label for="descricao">Descrição:</label><br>        
            <textarea id="descricao" name="descricao" rows="5" cols="100">{{old('descricao')}}</textarea><br><br>
        <input type="submit" value="Enviar Formulário" id="enviar_form">
        
    </form>

    @if ($errors->any())

    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    <br><a href="{{ route('form.index') }}">Voltar para página inicial.</a>
    
</body>
</html>
