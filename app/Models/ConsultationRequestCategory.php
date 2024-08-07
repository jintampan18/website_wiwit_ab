<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationRequestCategory extends Model
{
    use HasFactory;
    public $table = 'consultation_request_category';

    protected $fillable = [
        'name',
    ];

    public function consultationRequests()
    {
        return $this->hasMany(ConsultationRequest::class, 'consultation_request_category_id');
    }
}
