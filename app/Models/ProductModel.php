<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'product',
        'date',
        'no_product',
        'dod',
        'size',
        'setting',
        'gold_weight',
        'metal_karat',
        'metal_color',
        'polish_type',
        'party_sample_des',
        'description',
        'file_url',
        'status',
    ];
}
