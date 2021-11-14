<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;

        // Evitar la asignacion masiva de dichos campos
        protected $guarded = ['id','created_at','updates_at'];


        // Relacion de uno a muchos
        public function size(){
            return $this->hasMany(Size::class);
        }        

        // Relacion de uno a muchos inversa 
        public function brand(){
                return $this->belongsTo(Brand::class);
        }

        public function subcategories(){
            return $this->belongsTo(Subcategory::class);
        }

        // Relacion de muchos a muchos
        public function colors(){
            return $this->belongsToMany(Color::class);
        }


}