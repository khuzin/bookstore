<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookDestroyRequest;
use App\Http\Requests\BookShowRequest;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookUpdateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(BookStoreRequest $request) {
        $title = $request->input('title');
        $content = $request->input('content');
        $author_id = $request->input('author_id');

        $book = Book::create([
            'title'=>$title,
            'content'=>$content,
        ]);

        $data = $book->author()->attach($author_id);
        return redirect()->back();
    }

    public function show(BookShowRequest $request, $id) {

        $book = Book::find($id);

        $author = $book->author;
        return response()->json([
            $book,
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE
            ]);
    }

    public function destroy(BookDestroyRequest $request,$id) {
        $book = Book::destroy($id);

        return redirect()->back();
    }

    public function edit(BookShowRequest $request, $id) {

        return view('bookedit')->with(['id'=>$id]);
    }

    public function update(BookUpdateRequest $request, $id) {
//        $id = $request->input('book_id');
        $title = $request->input('title');
        $content = $request->input('content');
//        return [$id,$title,$content];
        $book = Book::find($id);
        $book->title = $title;
        $book->content = $content;
        $book->save();
        $author = $book->author;
        $id = $author[0]->id;

        return redirect()->to('/author/'.$id);
    }
}
