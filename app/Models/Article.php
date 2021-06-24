<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'category_id',
        'image',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 /*    {
        return $this->belongsTo(User::class);
    } */
  
    public function category()
    {
        // return $this->belongsTo(Category::class,'image','image_id');
        return $this->belongsTo(Category::class);
    }
    public function detailData($id)
    {
        return DB::table('article')->where('id',$id)->first();
    }

    public function scopeSearch($query,$title)
    {
        return $query->where('title','LIKE',"%{$title}%");
    }

    

}
