@extends('layouts.app')

@section('content')
  <body class="p-3">
    <h1>ブログ編集</h1>

    {{Form::open(['route' => ['blogs.update', $article], 'method' => 'PUT'])}}
      <input type="hidden" class="form-control" name="id" value="{{ $article->id }}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
      </div>
      {{Form::button('更新', ['class' => 'btn btn-primary', 'type' => 'submit'])}}
    </form>
  </body>
  @endsection