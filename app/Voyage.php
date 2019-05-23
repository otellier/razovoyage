<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    public $destination;
    public $description;
    public $prix;
    public $image;
    public $titre;

    public function __construct($destination, $description, $prix, $image, $titre) {
        this->$description = $description;
        this->$destination = $destination;
        this->$prix = $prix; 
        
    }
}
