<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   // protected $fillable= ['title','excerpt','body','id'];
    protected $with = 'category';

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

           $query->when($filters['category']?? false ,fn ($query,$category)
           =>$query->whereHas('category', fn($query)=>
           $query->where('posts.slug',$category)
           )

        );
    }
}
?>