@extends('layouts.app')

@section('content')
  <body class="p-3">
    <h1>マイページ</h1>

    {{ Form::open(['method' => 'GET', 'id' => 'search_form', 'name' => 'blogs.index']) }}
<div class="card mb-3 bg-light">
  <div class="card-body">
    <div class="row">
        <div class="form-check form-check-inline">
        </div>
    </div>
    <div class="text-center">
      {{ Form::submit('この条件で検索する', ['class' => 'btn btn-primary']) }}
    </div>
    {{ Form::close() }}
  </div>
</div>

<br>

    @foreach ($articles as $article)
    <div class="card mb-2">
      <div class="card-body">
        <a href="/blogs/{{ $article->id }}"><h4 class="card-title">{{ $article->title }}</h4></a>
        <h6 class="card-subtitle mb-2 text-muted">{{ $article->updated_at }}</h6>
          </form>
      </div>
    </div>
    @endforeach

  </body>
  @endsection
