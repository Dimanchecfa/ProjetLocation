<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
        //une location ne  peut etre valider que par un seul User
    }

    public function client(){
        return $this->belongsTo(Client::class);
        //Une location ne peut etre loue que par un seul client
    }

    public function statut(){
        return $this->belongsTo(StatutLocation::class, "statut_location_id", "id");
        //une location ne peut avoir qu'un seul statut

    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
       // Une location peut avoir plusieur paiements
    }

    public function articles(){
        return $this->belongsToMany(Article::class,"article_location", "location_id", "article_id");
    }
}
