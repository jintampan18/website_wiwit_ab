<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialCategory extends Model
{
    use HasFactory;
    public $table = 'material_category';

    protected $fillable = [
        'name',
    ];

    public function materials()
    {
        return $this->hasMany(Material::class, 'material_category_id');
    }

    
}
