<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Card;
use Inertia\Inertia;

class BoardController extends Controller
{
    public function index()
    {
        return Inertia::render('Boards/Index', [
            'boards' => auth()->user()->boards
        ]);
    }

    public function show(Board $board, Card $card = null)
    {
        $board->load([
            'lists.cards' => fn ($query) => $query->orderBy('position')
        ]);

        return Inertia::render('Boards/Show', [
            'board' => $board,
            'card' => $card,
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
    public function destroy(Board $board)
    {
        $board->delete();

        return redirect()->route('boards');
    }

    public function recentBoards()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $boards = Board::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(4)->get();
        return response()->json($boards);
    }
}
