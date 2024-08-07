<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    use HasFactory;
    public $table = 'consultation_request';

    protected $fillable = [
        'consultation_request_category_id',
        'name',
        'phone_number',
        'email',
        'subject',
        'message',
    ];

    public function consultationRequestCategory()
    {
        return $this->belongsTo(ConsultationRequestCategory::class, 'consultation_request_category_id');
    }

}
