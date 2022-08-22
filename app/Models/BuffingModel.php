<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuffingModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'buffing';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_no',
        'gms_issued',
        'date',
        'weight',
        'unique_id',
        'worker_id',
        'dust',
        'status',
    ];
}
