<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'report_id', 'image',
    ];
    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
