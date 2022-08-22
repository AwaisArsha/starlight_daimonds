<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FillingModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'filling';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_no',
        'gms_issued',
        'date',
        'weight',
        'unique_id',
        'worker_id',
        'karat',
        'status',
    ];
}
