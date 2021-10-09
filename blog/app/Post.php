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
    ];
    
    public function getPaginateByLimit()
    {
    return $this->orderBy('updated_at', 'DESC')->paginate(5);
    }
}
