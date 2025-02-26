<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    protected $table = 'chuc_vus';
    protected $primaryKey = 'CV_MA';
    public $timestamps = true;

    protected $fillable = [
        'CV_TEN', 'CV_MOTA'
    ];

    public function nhanViens()
    {
        return $this->hasMany(NhanVien::class, 'CV_MA', 'CV_MA');
    }
}