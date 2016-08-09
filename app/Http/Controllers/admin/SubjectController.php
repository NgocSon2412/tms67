<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Subject;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        return view('subjects.index', [
            'subjects' => Subject::all(),
        ]);
    }

    public function create()
    {
        return view('subjects.new');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required|max:80',
        //     'content' => 'required|max:255',
        // ]);
        // $request->user()->posts()->create([
        //     'title' =>$request->title,
        //     'content' => $request->content,
        // ]);
        // session()->flash('flash_message', 'Your Post has been created ! ');
        // return redirect('/user/' . $request->user()->id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
