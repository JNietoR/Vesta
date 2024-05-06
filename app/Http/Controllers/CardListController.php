<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\CardList;

class CardListController extends Controller
{
    public function store(Board $board)
    {
        request()->validate([
            'name' => ['required']
        ]);

        CardList::create([
            'board_id' => $board->id,
            'user_id' => auth()->id(),
            'name' => request('name')
        ]);

        return redirect()->back();
    }

    public function destroy(CardList $list)
    {
        $boardId = $list->board_id;
        $list->delete();

        return redirect()->route('boards.show', ['board' => $boardId]);
    }
}
