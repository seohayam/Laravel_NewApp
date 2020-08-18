@extends('layouts.app')

@section('content')

<div class="m-5 text-center border rounded-pill">
    <p class="m-0 py-3">{{$post->user->name}}</p>
</div>

<div class="row border rounded m-5 p-3 p-md-5">
    <!-- 今までのデータ表示 -->
    <div class="col-md-6 my-3 m-md-0 p-0" style="height: 348px;">
        <img id="show_img" class="border rounded d-flex mx-auto" style="width: 50%; height:100%; object-fit: fill;" src="{{ asset('storage/image/'.$post->image) }}">
    </div>
    <div class="col-md-6 border rounded p-3 p-md-5">
        <h4 class="card-title text-center">詳細</h4>
        <hr class="mx-5">
        <p class="card-text text-center">{{$post->opinion}}</p>
    </div>
</div>
    <!-- 質問と回答 -->
    <div id="qa" class="d-flex justify-content-md-around flex-row m-5">

        <div class="q border p-5 border-info">
            <div>
                <h4 class="card-title text-center">Q</h4>

                <table class="table table-striped text-center border-0 mt-5">
                    <thead>
                        <tr>
                            <th class="border-0" scope="col">質問者</th>
                            <th class="border-0" scope="col">内容</th>
                        </tr>
                    </thead>
                    @foreach($post->comment as $question)
                    <tbody>
                        <tr>
                        <td>{{$question->user->name}}</td>
                        <td>{{$question->comment}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

            </div>

            <!-- フォーム 質問 -->
            <div class="mt-5">

                @error('user_id')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror

                @error('user_id')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror

                @error('comment')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror
                
            <hr>

                <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data" class="mx-5 mb-5">
                @csrf
                <div class="form-group">
                    <label>質問</label>
                    <textarea name="comment"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="回答を記入してください"></textarea>
                </div>

                <input name="user_id" type="hidden" value="{{Auth::id()}}">
                <input name="post_id" type="hidden" value="{{$post->id}}">

                <div class="text-center">
                    <input type="submit" class="btn btn-info" value="投稿する">
                </div>

                </form>

            </div>

        </div>

        <div class="a border p-5 border-danger">

            <div>
                    <h4 class="card-title text-center">A</h4>

                    <table class="table table-striped text-center border-0 mt-5">
                        <thead>
                            <tr>
                                <th class="border-0" scope="col">回答者</th>
                                <th class="border-0" scope="col">内容</th>
                            </tr>
                        </thead>
                        @foreach($post->answer as $a)
                        <tbody>
                            <tr>
                                <td>{{$a->user->name}}</td>
                                <td>{{$a->answer}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>


            <!-- フォーム　回答 -->
            <div class="mt-5">

                @error('user_id')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror
                @error('user_id')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror
                @error('answer')
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Caution</h4>
                    <p>{{$message}}</p>
                </div>
                @enderror

                <hr>

                <form action="{{ route('answers.store') }}" method="POST" enctype="multipart/form-data" class="mx-5 mb-5">
                @csrf
                <div class="form-group">
                    <label>回答</label>
                    <textarea name="answer"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="回答を記入してください"></textarea>
                </div>

                <input name="user_id" type="hidden" value="{{Auth::id()}}">
                <input name="post_id" type="hidden" value="{{$post->id}}">

                <div class="text-center">
                    <input type="submit" class="btn btn-info" value="投稿する">
                </div>

                </form>

        </div>

    </div>

@endsection
