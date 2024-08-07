<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPageSetting extends Model
{
    use HasFactory;
    public $table = 'contact_page_setting';

    protected $fillable = [
        'address',
        'working_hours',
        'personal_email',
        'office_email',
        'contact_number'
    ];
}
