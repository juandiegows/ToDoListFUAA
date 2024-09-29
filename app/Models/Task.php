<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'list_task_id',
        'completed_by',
        'created_by',
        'completed_at'
    ];

    public function getIsCompleteAttribute()
    {
        return !is_null($this->completed_at);
    }
}
