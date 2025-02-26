<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiongThuCung extends Model
{
    protected $table = 'giong_thu_cungs';
    protected $primaryKey = 'GTC_MA';
    public $timestamps = true;

    protected $fillable = [
        'GTC_TEN', 'GTC_MOTA', 'LTC_MA'
    ];

    public function loaiThuCung()
    {
        return $this->belongsTo(LoaiThuCung::class, 'LTC_MA', 'LTC_MA');
    }

    public function thuCungs()
    {
        return $this->hasMany(ThuCung::class, 'GTC_MA', 'GTC_MA');
    }
}