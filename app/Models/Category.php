<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // habilitar la asignacion masiva 
    protected $fillable = ['name','slung','icon'];

    // Relaciones de uno a muchos
    public function subcategories(){
        return  $this->hasMany(Subcategory::class);
    }

    //Relaciones de muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brands::class);
    }

    // Relacion de atraves de 
    public function products(){
        return $this->hasManyThrough(Product::class,subcategory::class);
    }

}
