@extends('layouts.master')

@section('content')
    <h1>Create New Article</h1>
    <div class="ml-4">
        <form action="/article" method="POST">
            @csrf
            <!-- <div class="form-group">
                <label for="username">Nama User</label><br>
                <input type="text" name="username">
            </div> -->

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" class="form-control" name="content" id="content" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" name="tags" id="tags">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Post">
            </div>
        </form>
    </div>
@endsection
