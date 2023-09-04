<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    // RELAZIONE MANY TO MANY

public function products(){

return $this->belongsToMany(Product::class);

}


}
