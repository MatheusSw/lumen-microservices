<?php

namespace App\Http\Controllers;

use App\Models\Author;
use BadMethodCallException;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AuthorController extends BaseController
{

    /**
     * Returns all authors
     *
     * @return void
     */
    public function index(){
        return response()->json(Author::all());
    }
    
    /**
     * Tries to retrieve one author from the database
     * Sadly Lumen doesn't accept type-hinting eloquent models out of the box so we must use the Request class
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function show(Request $request, $id){
        return response()->json(Author::findOrFail($id));
    }

    public function store(){
        throw new BadMethodCallException("Not implemented");
    }

    public function update(Request $request){
        throw new BadMethodCallException("Not implemented");
    }

    public function destroy(){
        throw new BadMethodCallException("Not implemented");
    }
}
