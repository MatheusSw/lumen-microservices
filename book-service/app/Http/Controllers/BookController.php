<?php

namespace App\Http\Controllers;

use BadMethodCallException;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Returns all books
     *
     * @return void
     */
    public function index()
    {
        return response()->json(Book::all());
    }

    /**
     * Tries to retrieve one book from the database
     * Sadly Lumen doesn't accept type-hinting eloquent models out of the box so we must use the Request class
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function show(Request $request, $id)
    {
        return response()->json(Book::findOrFail($id));
    }

    public function store()
    {
        throw new BadMethodCallException("Not implemented");
    }

    public function update(Request $request)
    {
        throw new BadMethodCallException("Not implemented");
    }

    public function destroy()
    {
        throw new BadMethodCallException("Not implemented");
    }
}
