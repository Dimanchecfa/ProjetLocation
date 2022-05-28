<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
        //Un paiements ne peut etre valider que par in seul user
    }

    public function location(){
        return $this->belongsTo(Location::class);
        //Un paiement ne peut ppartenir qu'a une seule location
        
    }
}
