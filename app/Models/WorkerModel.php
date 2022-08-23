<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'worker';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'aadhaar',
        'phone',
        'address',
        'email',
        'file_url',
    ];
}
