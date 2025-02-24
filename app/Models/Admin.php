<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'QUAN_TRI_VIEN';
    protected $primaryKey = 'QTV_MA';
    public $timestamps = true;

    protected $fillable = [
        'QTV_EMAIL',
        'QTV_MATKHAU',
        'QTV_HOTEN',
    ];
}