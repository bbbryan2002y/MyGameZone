<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    // Evitar la asignacion masiva de dichos campos
    protected $guarded = ['id','created_at','updates_at'];

    // Relacion de uno de a muchos  inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
