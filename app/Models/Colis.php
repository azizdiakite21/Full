<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colis extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['contenu', 'nomdestinataire', 'prenomdestinataire', 'telephonedestinataire', 'taxage', 'destination', 'poids', 'date_enregistrement', 'statut_colis', 'code_colis', 'id_client', 'id_voyage', 'id_caissier'];
    protected $primaryKey = 'id_colis';

    public function voyage() {
        return $this->belongsTo(Voyage::class, 'id_voyage');
    }

    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_caissier');
    }
}
