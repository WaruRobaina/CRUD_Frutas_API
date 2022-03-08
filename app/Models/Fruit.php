<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\ElseIf_;

class Fruit extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'size', 'color'];

    public function setFruit($name, $size){
        $this->attributes['name'] = ucfirst(strtolower($name));
        $this->attributes['size'] = ucfirst(strtolower($size));
    }

    public function setFruitC($name, $size, $color){
        $this->attributes['name'] = ucfirst(strtolower($name));
        $this->attributes['size'] = ucfirst(strtolower($size));
        $this->attributes['color'] = ucfirst(strtolower($color));
    }

    public function validateSize($size){
        $sizes = array("Grande", "Mediano", "Pequeño");
        if(in_array(ucfirst(strtolower($size)), $sizes)){
            return true;
        } else {
            return false;
        }        
    }

}
