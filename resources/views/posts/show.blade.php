@extends('layouts.app')

@section('content')
    <a href="/post" class="btn btn-default">Voltar</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
      {!!$post->body!!}
    </div>
    <hr>
    <small>Escrito em {{$post->created_at}} por {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <a href="/post/{{$post->id}}/edit" class="btn btn-default">Editar</a>
        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      @endif
    @endif
@endsection
