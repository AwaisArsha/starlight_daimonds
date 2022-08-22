<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'client_name',
        'product_name',
        'date',
        'size',
        'unique_id',
        'purity',
        'metal_color',
        'gross_weight',
        'gr_approx',
        'status',
        'comments',
        // 'file_url',
    ];
}
