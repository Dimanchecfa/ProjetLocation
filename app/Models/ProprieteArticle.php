<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprieteArticle extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(TypeArticle::class, "type_article_id", "id");
        //Une propriete ne peut apartenir qu'a un seul type d'article
    }
}
