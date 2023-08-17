<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('form.update', $form->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="image">Imagem de Apresentação</label><br>
            <input type="file" name="image" id="image"><br><br>
                <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" value="{{$form->nome}}"><br><br>
                        <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="{{$form->sobrenome}}"><br><br>
                <label for="descricao">Descrição:</label><br>        
            <textarea id="descricao" name="descricao" rows="5" cols="100">{{$form->descricao}}</textarea><br><br>
        <input type="submit" value="Enviar Formulário" id="enviar_form">
        
    </form> <br>

        <form action="{{route('form.destroy', $form->id)}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button>Deletar Formulário</button>
        </form>

        <br><a href="{{ route('form.index') }}">Voltar para página inicial.</a>

</body>
</html>