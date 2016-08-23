<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'reports', 'coorx','coory','user_id','subsection_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function image()
    {
        return $this->hasMany(Image::class);
    }
    public function subsection()
    {
        return $this->belongsTo(SubSection::class);
    }
    public function comment()
    {
        return $this->hasOne(Comment::class);
    }
}
