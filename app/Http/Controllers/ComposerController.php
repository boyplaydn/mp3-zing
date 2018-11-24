<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Composer;
use App\Http\Requests\CreateComposerRequest;

class ComposerController extends Controller
{
    public function create(Request $request)
    {
        return view('composer.create');
    }

    public function store(CreateComposerRequest $request)
    {
        try {
            $composer = new Composer();
            $composer->name = $request->name;
            // $book->title = $request->title;
            // $book->description = $request->description;
            // $book->publication_year = $request->publication_year;
            // $book->number_of_page = $request->number_of_page;
            // $book->author_id = $request->author_id;
            $composer->save();
        } catch (Exception $e) {
        }

        return redirect()->route('composer.create')->with('message', 'Done');

    }
}
