<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public $table = 'material';

    protected $fillable = [
        'material_category_id',
        'title',
        'type',
        'description',
        'file',
        'author',
        'download_count',
        'year',
        'jurnal',
        'volume',
        'nomor',
        'halaman',
        'penerbit',
        'link',
        'thumbnail'
    ];

    public function materialCategory()
    {
        return $this->belongsTo(MaterialCategory::class, 'material_category_id');
    }
}