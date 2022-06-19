<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaModel extends Model
{
    use HasFactory;

    protected $table = 'desa';

    public function titikModel()
    {
        return $this->hasMany(TitikModel::class);
    }
}
