<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Inertia\Inertia;

class BoardController extends Controller
{
    public function index()
    {
        return Inertia::render('Boards/Index', [
            'boards' => auth()->user()->boards
        ]);
    }

    public function show(Board $board)
    {
        $board->load('lists.cards');

        return Inertia::render('Boards/Show', [
            'board' => $board
        ]);
    }

    public function update(Board $board)
    {
        request()->validate([
            'name' => ['required', 'max:255']
        ]);

        $board->update(['name' => request('name')]);

        return redirect()->back();
    }

    public function store()
    {
        request()->validate([
            'name' => ['required']
        ]);

        Board::create([
            'user_id' => auth()->id(),
            'name' => request('name')
        ]);

        return redirect()->back();
    }
}
