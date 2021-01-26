<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    // Getter du client à qui appartient ce work
    public function client(){
      return $this->belongsTo('App\Models\Client');
    }

    // Getter des tags du work
    public function tags(){
      return $this->hasMany('App\Models\Tag', 'works_has_tags');
    }
}
