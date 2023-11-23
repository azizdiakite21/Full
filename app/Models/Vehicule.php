<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicule extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['nbplaces', 'plaque', 'marque', 'climatisation', 'statut'];
    protected $primaryKey = 'id_vehicule';

    public function voyages() {
        return $this->hasMany(Voyage::class, 'id_voyage');
    }
}
