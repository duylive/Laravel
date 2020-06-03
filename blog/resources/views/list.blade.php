@extends('welcome')
@section('title', 'List blogs')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>List blogs</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title blog</th>
                    <th scope="col">Content</th>
                    <th scope="col">Author</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($blogs) == 0)
                    <tr><td colspan="4">Not data</td></tr>
                @else
                    @foreach($blogs as $key => $blog)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->content }}</td>
                            <td>{{ $blog->Author }}</td>
                            <td><a href="{{ route('blogs.edit', $blog->id) }}">Edit</a></td>
                            <td><a href="{{ route('blogs.destroy', $blog->id) }}" class="text-danger" onclick="return confirm('You want to delete ?')">Delete</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('blogs.create') }}">Create new blog</a>
        </div>
    </div>
@endsection

