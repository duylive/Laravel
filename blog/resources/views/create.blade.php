@extends('welcome')
@section('title', 'Addition new blog')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Addition new blog</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('blogs.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Title blog</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter content" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="author" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

