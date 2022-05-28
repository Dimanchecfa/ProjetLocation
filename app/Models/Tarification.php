<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    use HasFactory;

    public function dureeLocation(){
        return $this->belongsTo(DureeLocation::class, "duree_location_id", "id");
        //Une tarification ne peut avoir qu'une seule duree de location
    }

    public function article(){
        return $this->belongsTo(Article::class, "article_id" , "id");
        //Une tarification ne peut peut avoir qu'un seul article
        
    }
}
