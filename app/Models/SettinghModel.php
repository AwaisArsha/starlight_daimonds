<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SettingModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'setting';

    protected $primaryKey = 'id';

    protected $fillable = [
        'order_no',
        'gms_issued',
        'date',
        'weight',
        'unique_id',
        'worker_id',
        'w_karat',
        'w_piece',
        'dd_karat',
        'dd_karat_CS',
        'dd_karat_AD',
        'dd_piece_CS',
        'dd_piece_AD',
        'dust',
        'status',
    ];
}
