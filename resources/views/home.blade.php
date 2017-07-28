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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
