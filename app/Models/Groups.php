<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $fillable = [
        'name',
        'teacher_id'
    ];

    public function students()
    {
        return $this->hasMany(Students::class, 'group_id');
    }

    public function isFull()
    {
        return $this->students->count() >= 6;
    }

    public function teachers() {
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }
}
