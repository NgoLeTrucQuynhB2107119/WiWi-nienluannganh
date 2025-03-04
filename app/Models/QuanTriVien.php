<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class QuanTriVien extends Authenticatable
{
    protected $table = 'quan_tri_viens';
    protected $primaryKey = 'QTV_MA';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'QTV_MA', 'QTV_EMAIL', 'QTV_MATKHAU', 'QTV_HOTEN', 'remember_token'
    ];

    protected $hidden = [
        'QTV_MATKHAU', 'remember_token',
    ];

    public function getAuthIdentifierName()
    {
        return 'QTV_EMAIL';
    }

    public function getAuthPassword()
    {
        return $this->QTV_MATKHAU;
    }
}
