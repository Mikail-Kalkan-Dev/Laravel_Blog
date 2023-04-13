<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title']; //allow just the title on mass assignment
    //protected $guarded = ['id']; //guard just the id on mass assignment
    protected $guarded = []; //don't allow mass assignment unlless you are in control of the key vellue pair


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
