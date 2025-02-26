<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class QuanTriVien extends Model
{
    protected $table = 'quan_tri_viens';
    protected $primaryKey = 'QTV_MA';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'QTV_MA', 'QTV_EMAIL', 'QTV_MATKHAU', 'QTV_HOTEN'
    ];
    public function setQTV_MATKHAUAttribute($value)
    {
        $this->attributes['QTV_MATKHAU'] = Hash::make($value);
    }
    public function getAuthPassword()
    {
        return $this->QTV_MATKHAU;
    }
}