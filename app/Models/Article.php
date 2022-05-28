<?php

namespace App\Models;
;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    public function type(){
        return $this->belongsTo(TypeArticle::class, "type_article_id", "id");
        //un article ne peut appartenir qu'a un seul type d'article
    }

    public function tarifications(){
        return $this->hasMany(Tarification::class);
        // Un article peut avoir plusieurs tarifications
    }

    public function locations(){
        return $this->belongsToMany(Location::class,"article_location", "article_id", "location_id");
        //Une Article peut etre demande pour plusieurs locations

    }

    public function proprietes(){
        return $this->belongsToMany(ProprieteArticle::class,"article_propriete", "article_id", "propriete_article_id");
        //un article peut avoir plusieurs proprietes
    }

}
