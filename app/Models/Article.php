<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use PhpParser\Builder\Class_;

class Article extends Model
{
    use HasFactory;
    use Sluggable;
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ''
            ]
        ];
    }
}
