@extends('layouts.app')

@section('content')

<div class="m-5 text-center">
    <h1>投稿画面</h1>
</div>
<!-- エラー -->
@if(count($errors) > 0)
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Caution</h4>
    @error('user_id')
        <p>{{$message}}</p>
    @enderror
    @error('opinion')
        <p>{{$message}}</p>
    @enderror
    @error('image')
        <p>{{$message}}</p>
    @enderror
    </div>
@endif

<!-- フォーム -->
<div class="p-5">
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mx-5 mb-5">
    @csrf
    <div class="form-group">
        <label>詳細</label>
        <input name="opinion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例：〜学部　〜専攻　〜年　お気にりの授業：">
    </div>

    <div class="form-group d-flex flex-column flex-md-row mt-5">
        <div class="mr-md-5">
            <label for="exampleFormControlFile1">あなたの時間割（画像）</label>
        </div>
        <div>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

    </div>

    <input name="user_id" type="hidden" value="{{Auth::id()}}">

    <div class="text-center">
        <input type="submit" class="btn btn-info mt-5" value="投稿する">
    </div>

    </form>
</div>

@endsection
