<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment' , 'approved' , 'parent_id' ,'commentable_id' , 'commentable_type'];
}
