@extends('welcome')
@section('title', 'Edit blog')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12"><h1>Edit blog</h1></div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.update', $blog->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Title blog</label>
                        <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="content" value="{{ $blog->content }}" required></div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="text" value="{{ $blog->author }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

