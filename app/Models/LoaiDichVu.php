<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiDichVu extends Model {
    protected $table = 'LOAI_DICH_VU';
    protected $primaryKey = 'LDV_MA';
    public $timestamps = true;

    protected $fillable = ['LDV_TEN', 'LDV_MOTA'];

    public function dichVus() {
        return $this->hasMany(DichVu::class, 'LDV_MA');
    }
}