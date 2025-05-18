<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaSidang extends Model
{
    use HasFactory;

    protected $table = 'table_agenda_sidang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_sidang',
        'judul_agenda',
        'deskripsi',
        'waktu_mulai',
        'waktu_selesai',
        'status_agenda'
    ];

    protected $casts = [
        'waktu_mulai' => 'datetime',
        'waktu_selesai' => 'datetime'
    ];

    public function sidang()
    {
        return $this->belongsTo(Sidang::class, 'id_sidang');
    }
}
