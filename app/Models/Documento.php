<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';
    protected $fillable = ['id', 'nombre', 'contenido'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
