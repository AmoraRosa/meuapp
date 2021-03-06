@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a href="/post/create" class='btn btn-primary'>Criar Post</a>
                  <h3>Seus posts</h3>
                  @if(count($posts)>0 )
                    <table class='table table-striped'>
                      <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($posts as $post)
                        <tr>
                          <td>{{$post->title}}</td>
                          <td><a href="/post/{{$post->id}}/edit" class='btn btn-default'>Editar</a></td>
                          <td>{!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                              {{Form::hidden('_method','DELETE')}}
                              {{Form::submit('Deletar', ['class' => 'btn btn-danger'])}}
                              {!!Form::close()!!}</td>
                        </tr>
                      @endforeach
                    </table>
                  @else
                    <p>Você ainda não tem posts</p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
