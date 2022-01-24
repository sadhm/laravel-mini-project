<?php

namespace App\frontmodels;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;
    protected $fillable=['name','status','slug','user_id','description'];
    protected $attributes = [
        'hit'=>1,
        'icon'=>'ion-ios-analytics-outline'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
