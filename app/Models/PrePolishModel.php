<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PrePolishModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'pre_polish';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_no',
        'gms_issued',
        'date',
        'weight',
        'unique_id',
        'worker_id',
        'status',
    ];
}
