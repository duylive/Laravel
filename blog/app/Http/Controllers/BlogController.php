<?php

namespace App\Http\Controllers;

use App\Blog;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('list', compact('blogs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();

        Session::flash('success', 'Tạo mới blog thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Customer::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->save();

        Session::flash('success', 'Cập nhật blog thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        Session::flash('success', 'Xóa blog thành công');

        return redirect()->route('index');
    }
}
