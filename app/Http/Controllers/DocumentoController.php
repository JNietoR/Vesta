<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Inertia\Inertia;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->id(); // Obtener el usuario actualmente autenticado
        $documentos = Documento::where('user_id', $userId)->orderBy('favorito', 'desc') // Ordenar favoritos primero
            ->orderBy('created_at', 'desc') // Luego ordenar por fecha de creación
            ->get(); // Obtener todos los documentos del usuario
        return Inertia::render('documentos/index', [
            'documentos' => $documentos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userId = auth()->id(); // Obtener la ID del usuario actualmente autenticado
        return Inertia::render('documentos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'contenido' => 'required',
        ]);

        $user = auth()->user(); // Obtener el usuario actualmente autenticado

        $documento = new Documento();
        $documento->nombre = $request->nombre;
        $documento->contenido = $request->contenido;
        $documento->user_id = $user->id; // Asignar el ID del usuario
        $documento->save();

        return redirect()->route('documentos')
            ->with('success', 'Documento creado correctamente.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'contenido' => 'required',
        ]);
        $documento = Documento::find($id);

        // Actualiza los campos del documento
        $documento->update([
            'nombre' => $request->nombre,
            'contenido' => $request->contenido,
        ]);

        // Redirige a la página de documentos
        return redirect()->route('documentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $documento = Documento::find($id);
        $documento->delete();

        return redirect()->route('documentos')
            ->with('success', 'Documento eliminado correctamente.');
    }

    public function toggleFavorito($id)
    {
        $documento = Documento::findOrFail($id);

        // Cambiar el valor de favorito
        $documento->favorito = $documento->favorito == 1 ? 0 : 1;
        $documento->save();

        // Puedes redirigir a la página anterior o hacer otra acción deseada
        return back()->with('success', 'El documento favorito ha sido actualizado correctamente.');
    }
    public function recentDocuments()
    {
        $user = auth()->user();
        $user_id = $user->id;
        $documents = Documento::where('user_id',$user_id)->orderBy('updated_at', 'desc')->take(4)->get();
        return response()->json($documents);
    }
}
