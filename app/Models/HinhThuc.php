<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HinhThuc extends Model
{
    protected $table = 'hinh_thucs';
    protected $primaryKey = 'HT_MA';
    public $timestamps = true;

    protected $fillable = [
        'HT_TEN',
    ];

    public function lichHens()
    {
        return $this->hasMany(LichHen::class, 'HT_MA', 'HT_MA');
    }
}
