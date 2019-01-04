@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a href="/blogs" class="btn btn-info w-100" onClick="document.location='/blogs';">ブログ一覧</a>
                        <a href="/blogs" class="btn btn-warning w-100">マイページ</a>
                        <a href="/blogs" class="btn btn-danger w-100">アカウント管理</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
