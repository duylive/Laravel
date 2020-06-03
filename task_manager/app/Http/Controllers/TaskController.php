<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //Lấy ra toàn bộ các task từ database thông qua truy vấn bằng Eloquent
        $tasks = Task::all();

        // Trả về view index và truyền biến tasks chứa danh sách các task
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        //Khởi tạo mới đối tượng task, gán các trường tương ứng với request gửi lên từ trình duyệt
        $task = new Task();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->due_date = $request->inputDueDate;

        // Nếu file không tồn tại thì trường image gán bằng NULL
        if (!$request->hasFile('inputFile')) {
            $task->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');

            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng task với tên mới
            $task->image = $newFileName;
        }
        $task->save();

        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);

        return redirect()->route('tasks.index', compact('message'));
    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
 */
public
function show($id)
{
    return view('tasks.show');
}

/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
 */
public
function edit($id)
{
    return view('tasks.edit');
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
 */
public
function update(Request $request, $id)
{
    return view('tasks.update');
}

/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
 */
public
function destroy($id)
{
    return view('tasks.destroy');
}
}
