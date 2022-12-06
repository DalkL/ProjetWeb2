<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'annee',
        'date_arrivee',
        'prix_paye',
        'kilometrage',
        'description',
        'description_en',
        'date_heure_reservation',
        'corps_id',
        'modeles_id',
        'transmissions_id',
        'groupe_motopropulseurs_id',
        'carburants_id',
        'commandes_id',
        'statut_voitures_id',
        'etats_id',
        'reservation_users_id'
    ];

    public function corps() {
        return $this->hasOne('App\Models\Corps', 'id', 'corps_id');
    }
    
    public function modele() {
        return $this->hasOne('App\Models\Modele', 'id', 'modeles_id');
    }

    public function transmission () {
        return $this->hasOne('App\Models\Transmission', 'id', 'transmissions_id');
    }

    public function groupeMotopropulseur () {
        return $this->hasOne('App\Models\GroupeMotopropulseur', 'id', 'groupe_motopropulseurs_id');
    }

    public function carburant () {
        return $this->hasOne('App\Models\Carburant', 'id', 'carburants_id');
    }

    public function commande () {
        return $this->hasOne('App\Models\Commande', 'id', 'commandes_id');
    }

    public function statut () {
        return $this->hasOne('App\Models\StatutVoiture', 'id', 'statut_voitures_id');
    }

    public function etat () {
        return $this->hasOne('App\Models\Etat', 'id', 'etats_id');
    }

    public function utilisateur () {
        return $this->hasOne('App\Models\User', 'id', 'reservation_users_id');
    }

    public function selectVoitureTableauDeBord() {
        return DB::select(
            'SELECT voitures.id as id, modeles.nom as modele, constructeurs.nom as constructeur, prix_paye, statut_voitures.nom as statut, statut_voitures.nom_en as statut_en 
            FROM voitures  
            JOIN modeles ON voitures.modeles_id = modeles.id 
            JOIN constructeurs ON modeles.constructeurs_id = constructeurs.id 
            JOIN statut_voitures ON voitures.statut_voitures_id = statut_voitures.id');
    }
}
