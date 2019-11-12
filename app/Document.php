<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title',
        'description',
        'owner_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
