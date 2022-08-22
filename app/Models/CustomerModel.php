<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'customers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
        'email',
        'phone',
        'gst',
        'payment_info',
        'pan',
        'aadhaar',
        'file_url',
    ];
}
