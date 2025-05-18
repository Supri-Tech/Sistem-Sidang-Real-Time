<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hakim extends Model
{
    use HasFactory;

    protected $table = 'table_hakim';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hakim_ketua',
        'hakim_anggota_1',
        'hakim_anggota_2',
        'panitera_pengganti'
    ];

    public function sidang()
    {
        return $this->hasMany(Sidang::class, 'id_hakim');
    }
}
