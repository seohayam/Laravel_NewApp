@extends('layouts.app')

@section('content')

<h1 class="text-center m-5">消去</h1>

@foreach($user->post as $post)
<div class="row d-flex justify-content-around border border-info rounded m-5 p-3 p-md-5">
    <div class="col-md-2 my-3 d-flex align-items-center justify-content-center">
        <form action="{{ route('posts.delete') }}" method="POST">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input type="hidden" name="user_id" value="{{$post->user->id}}">
            <input class="btn border border-info px-5 py-2" type="submit" value="消去">
        </form>
    </div>
    <div class="col-md-4 my-3 m-md-0 p-0" style="height: 348px;">
        <img id="show_img" class="border rounded d-flex mx-auto mx-md-5" style="width: 70%; height:100%; object-fit: fill;" src="{{ asset('storage/image/'.$post->image) }}">
    </div>
    <div class="col-md-3 border rounded p-3 p-md-5 mx-md-5">
        <h4 class="card-title text-center">詳細</h4>
        <hr class="mx-5">
        <p class="card-text text-center">{{$post->opinion}}</p>
    </div>
</div>
@endforeach

@endsection
