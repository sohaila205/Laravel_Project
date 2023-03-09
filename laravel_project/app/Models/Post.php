<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable= ['title','excerpt','body','id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query , array $filters){

//        if(request('search')){
           $query->when($filters['search']?? false ,fn ($query,$search)=>$query
           ->where('title','like','%'.$search.'%'));
                
//         }
    }
}
