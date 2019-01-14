@extends('layouts.app')

@section('content')
  <body class="p-3">
    <h1>ブログ詳細</h1>
      {{ csrf_field() }}
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{ $article->body }}</textarea>
      </div>


  </body>
  @endsection
