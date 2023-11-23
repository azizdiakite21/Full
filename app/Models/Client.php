<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['nom', 'prenom', 'telephone', 'email'];
    protected $primaryKey = 'id_client';

    public function colis() {
        return $this->hasMany(Colis::class, 'id_colis');
    }

    public function ticket() {
        return $this->hasMany(Ticket::class, 'id_ticket');
    }

}
