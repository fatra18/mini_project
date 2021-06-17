<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        
    ];
    
    protected $primaryKey ="id";
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
