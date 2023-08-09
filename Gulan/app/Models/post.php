<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable   = ['title', 'description', 'category_id', 'user_id'];

    use HasFactory;



    public function category(){
        return $this->belongsTo(category::class);
    }

    
    public function user(){
        return $this->belongsTo(User::class);
    }

}
