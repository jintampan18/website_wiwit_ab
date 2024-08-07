<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public $table = 'work';

    protected $guarded = [
        'id'
    ];

    public function workCategory()
    {
        return $this->belongsTo(WorkCategory::class, 'work_category_id');
    }
}
