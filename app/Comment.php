<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'report_id', 'comment','telephone_contact',
    ];
    public function report()
    {
        return $this->hasOne(Report::class);
    }
}
