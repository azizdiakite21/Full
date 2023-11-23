<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['numplace', 'depart', 'arrivee', 'prix', 'statut', 'id_client', 'id_voyage'];
    protected $primaryKey = 'id_tickets';

    public function voyage() {
        return $this->belongsTo(Voyage::class, 'id_voyage');
    }

    public function client() {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
