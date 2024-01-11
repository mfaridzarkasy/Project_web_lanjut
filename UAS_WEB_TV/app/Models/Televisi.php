<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Televisi extends Model
{
    use HasFactory;

    protected $table = 'televisi';

    protected $fillable = ['id', 'nama', 'deskripsi', 'category_id', 'tahun', 'perusahaan', 'foto_sampul'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
