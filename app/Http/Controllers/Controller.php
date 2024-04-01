<?php

namespace App\Http\Controllers;
use App\Models\Documento;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function apiIndex()
{
    $userId = auth()->id();
    $documentos = Documento::where('user_id', $userId)->get();
    return response()->json($documentos);
}
}


