<h1>Editar o Post <strong> {{$post->title}} </strong></h1>

@if ($errors->any())
    <div>
            <ul>
                @foreach ($errors->all() as $error)
                        <li>
                                {{$error}} 
                        </li>       
                @endforeach
    </div>  </ul>     
@endif

<form action="{{ route('posts.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" placeholder="Titulo" value="{{ $post->title}}">
        <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdo"> {{ $post->content}}</textarea>
        <button type="submit"> Enviar</button>

</form>