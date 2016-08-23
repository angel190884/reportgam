<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subsection extends Model
{
    protected $fillable = [
        'name', 'description','section_id'
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
