<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $table = 'event';

    protected $fillable = [
        'event_category_id',
        'name',
        'location',
        'date',
        'thumbnail',
    ];

    public function eventCategory()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }
}
