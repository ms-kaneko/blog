@extends('layouts.app')

@section('content')
  <body class="p-3">
    <h1>{{$account->name}}さんのアカウント編集</h1>
    {{ csrf_field() }}
    {{Form::open(['route' => ['account.update', $account, 'method' => 'PUT']])}}
    {{ method_field('put') }}
      {{Form::hidden('id', $account->id, ['id' => 'id'])}}
      <div class="form-group">
        <label for="titleInput">メールアドレス</label>
      {{Form::text('email', $account->email, ['id' => 'email', 'class' => 'form-control'])}}
      </div>
      <div class="form-group">
        <label for="bodyInput">パスワード</label>
        {{Form::text('password', "", ['id' => 'password', 'class' => 'form-control'])}}
      </div>

      <div class="form-group">
        <label for="bodyInput">パスワード再入力</label>
        {{Form::text('re_password', "", ['id' => 're_password', 'class' => 'form-control'])}}
      </div>

        {{Form::button('変更を保存', ['class' => 'btn btn-primary', 'type' => 'submit'])}}
    {{Form::close()}}
  </body>
  @endsection
