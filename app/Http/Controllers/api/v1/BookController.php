<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookApiDestroyRequest;
use App\Http\Requests\BookApiIndexRequest;
use App\Http\Requests\BookApiShowRequest;
use App\Http\Requests\BookApiUpdateRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index(BookApiIndexRequest $request) {
        $id = $request->input('id');

        $author = Author::find($id);
        $author->book;
        return $author;
    }

    public function show(BookApiShowRequest $request) {
        $id = $request->input('id');
        $book = Book::find($id);
        return $book;
    }

    public function update(BookApiUpdateRequest $request) {
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');

        $book = Book::find($id);
        $book->title = $title;
        $book->content = $content;
        $book->save();
        return $book;
    }

    public function destroy(BookApiDestroyRequest $request, $id) {
//        $id = $request->input('id');

        $book = Book::destroy($id);

        return $book;
    }
}
