<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $color;
    public $make;
    public $modelNum;

    // public function __construct($make, $color, $modelNum) // $make, $modelNum
    // {
    //     $this->make = $make;
    //     $this->color = $color;
    //     $this->modelNum = $modelNum;
    // }

    public function getMake() :string 
    {
        return $this->make;
    }
    public function setMake(String $make) 
    {
        $this->make = $make;
    }


    public function getColor() :string 
    {
        return $this->color;
    }
    public function setColor(String $color) 
    {
        $this->color = $color;
    }


    public function getmodelNum(): ?int
    {
        return $this->modelNum;
    }
    public function setmodelNum(Int $modelNum) 
    {
        $this->modelNum = $modelNum;
    }
}



