<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ligne extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['prix', 'depart', 'arrivee', 'arrets'];
    protected $primaryKey = 'id_ligne';

    public function voyages() {
        return $this->hasMany(Voyage::class, 'id_voyage');
    }
}
