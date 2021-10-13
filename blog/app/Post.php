<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    
    public function getPaginateByLimit()
    {
    return $this::with('user')->orderBy('updated_at', 'DESC')->paginate(5);
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
