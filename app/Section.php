<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
    public function subsection()
    {
        return $this->hasMany(Subsection::class);
    }
}
