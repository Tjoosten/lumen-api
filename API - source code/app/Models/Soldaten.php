<?php

  namespace App\Models;

  use Illuminate\Database\Eloquent\Model;

  class Soldaten extends Model {

    protected $table = 'Gesneuvelde';

    public function soldiers() {
        return $this->hasMany('App\Models\Soldaten', 'herdenking_id', 'soldaat_id');
    }
}
