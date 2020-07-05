@extends('layouts.master')

@section('content')
    <h1>Edit Article #{{ $article->id }}</h1>
    <div class="ml-4">
        <form action="/article/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')
            <!-- <div class="form-group">
                <label for="username">Nama User</label><br>
                <input type="text" name="username">
            </div> -->

            <div class="form-group">
                <label for="title">Article Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $article-> title }}">
            </div>

            <div class="form-group">
                <label for="content">Article content</label>
                <textarea id="content" class="form-control" name="content" id="content" rows="10">{{ $article->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" name="tags" id="tags" value="{{ $article-> tags }}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Update">
            </div>
        </form>
    </div>
@endsection
