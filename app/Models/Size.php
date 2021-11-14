<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    
    // habilitar asignacion masiva 
    protected $fillable = ['name','products_id'];


    // Relaciones de uno a muchos inversa 
    public function products(){
        return $this->belongsTo(Product::class);
    }

    // Relacioens muchos a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }


}
