<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Putusan extends Model
{
    use HasFactory;

    protected $table = 'table_putusan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_sidang',
        'isi_sidang',
        'tanggal_putusan',
        'file_putusan',
        'status_putusan'
    ];

    protected $casts = [
        'tanggal_putusan' => 'date'
    ];

    public function sidang()
    {
        return $this->belongsTo(Sidang::class, 'id_sidang');
    }
}
