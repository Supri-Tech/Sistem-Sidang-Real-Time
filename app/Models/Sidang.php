<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidang extends Model
{
    use HasFactory;

    protected $table = 'table_sidang';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_perkara',
        'id_hakim',
        'waktu_sidang',
        'ruang_sidang',
        'status_sidang'
    ];

    protected $casts = [
        'waktu_sidang' => 'datetime'
    ];

    public function perkara()
    {
        return $this->belongsTo(Perkara::class, 'id_perkara');
    }

    public function hakim()
    {
        return $this->belongsTo(Hakim::class, 'id_hakim');
    }

    public function putusan()
    {
        return $this->hasMany(Putusan::class, 'id_sidang');
    }

    public function agendaSidang()
    {
        return $this->hasMany(AgendaSidang::class, 'id_sidang');
    }
}
