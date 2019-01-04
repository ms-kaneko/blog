@extends('layouts.app')

@section('content')
  <body class="p-3">
    <h1>ブログ新規追加</h1>

    <form method="post" action="/blogs">
       <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">新規追加</button>
    </form>

  </body>
  @endsection