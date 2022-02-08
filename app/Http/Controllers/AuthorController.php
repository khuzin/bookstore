<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

use App\Http\Requests\{AuthorDestroyRequest,
    AuthorIndexRequest,
    AuthorShowRequest,
    AuthorStoreRequest,
    AuthorUpdateRequest};
use Illuminate\Http\Response;


class AuthorController extends Controller
{
    public function store(AuthorStoreRequest $request) {
        $name = $request->input('name');

        $author = Author::create([
            'name'=>$name,
        ]);

        return redirect()->back();
    }

    public function destroy(AuthorDestroyRequest $request) {
        $id = $request->input('id');

        $author = Author::destroy($id);

        return redirect()->back();
    }

    public function index(AuthorIndexRequest $request, Response $response) {
//        $id = $request->input('id');

        $authors = Author::all();

        return view('index')->with('authors',$authors);
    }

    public function show(AuthorShowRequest $request, $id) {
        $author = Author::find($id);

        return view('author')->with(['author'=>$author, 'books'=>$author->book]);
    }

    public function edit(AuthorDestroyRequest $request) {
        $id = $request->input('id');

        $author = Author::find($id);

        return view('authoredit')->with(['author'=>$author]);
    }

    public function update(AuthorUpdateRequest $request) {
        $id = $request->input('id');
        $name = $request->input('name');

        $author = Author::find($id);
        $author->name = $name;
        $author->save();
        return redirect()->to('/author');

    }
}
