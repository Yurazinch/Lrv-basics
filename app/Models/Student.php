<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = [
        'group_id',
        'surname',
        'name'
    ];
    public function groups() 
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
