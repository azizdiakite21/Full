<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voyage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['datevoyage', 'heure_depart', 'ticketsvendus', 'id_vehicule', 'id_ligne'];
    protected $primaryKey = 'id_voyage';

    public function ticket() {
        return $this->hasMany(Ticket::class, 'id_ticket');
    }

    public function colis() {
        return $this->hasMany(Colis::class, 'id_colis');
    }

    public function ligne() {
        return $this->belongsTo(Ligne::class, 'id_ligne');
    }

    public function bus() {
        return $this->belongsTo(Bus::class, 'id_bus');
    }
}
