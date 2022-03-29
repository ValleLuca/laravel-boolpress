@extends('layouts.app')

@section('show')

    <div class="text-center">
        <h1>{{$post->title}}</h1>
        <p class="text-info">CONTENT:</p>
        <p>{{$post->content}}</p>
        <p class="text-info">SLUG:</p>
        <p>{{$post->slug}}</p>
        <p class="text-info">CATEGORIA:</p>
        <p>{{ $post->category ? $post->category->type : 'null' }}</p>
        <p class="text-info">TAG:</p>
        <p>
            @foreach ($post->tags as $item_tag)
                {{$item_tag->name}}
            @endforeach
        </p>


        
        <form action="{{route("admin.post.destroy", $post->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Cancella</button>
        </form>

        <div class="text-center m-1">
            <span><a href="{{route("admin.post.index")}}"><button type="button" class="btn btn-primary">Indietro</button></a></span>
            <span><a href="{{route("admin.post.create", $post->id)}}"><button type="button" class="btn btn-success">Aggiungi</button></a></span>
        </div>

        
    </div>

        
@endsection