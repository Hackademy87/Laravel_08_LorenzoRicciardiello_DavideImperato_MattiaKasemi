<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;


protected $fillable = ['name',
'price','category','gender','img','user_id','category_id'];



public function user(){

return $this->belongsTo(User::class);


}

public function category(){
    return $this->belongsTo(Category::class);
}


public function materials(){

    return $this->belongsToMany(Material::class);
    
    }


public function getMaterials(){

$materials = "";

foreach($this->materials as $material){

$materials = $materials . "#$material->name ";


}
return $materials;


}



}
