<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')
            ->join('categories', 'cate_id', '=', 'categories.id')
            ->select('books.*', 'name')
            ->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'cate_id' => $request['cate_id'],
        ];
        // dd($data);
        DB::table('books')->insert($data);
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = DB::table('books')
            ->where('id', $id)
            ->first();
        $categories = DB::table('categories')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request['title'],
            'thumbnail' => $request['thumbnail'],
            'author' => $request['author'],
            'publisher' => $request['publisher'],
            'publication' => $request['publication'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'cate_id' => $request['cate_id'],
        ];
        // dd($data);
        DB::table('books')
            ->where('id', $request['id'])
            ->update($data);
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        DB::table('books')->delete($id);
        return redirect()->route('books.index');
    }


}
