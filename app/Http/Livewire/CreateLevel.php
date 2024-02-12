<?php

namespace App\Http\Livewire;

use App\Models\Level;
use App\Models\SchoolYear;
use Exception;
use Livewire\Component;

class CreateLevel extends Component
{
    // Je mets les trois variable a cause de wire:model
    public $code;
    public $libelle;
    public $scolarite;

    public function store(Level $level)
    {
        $this->validate([
            'code' => 'string|required|unique:levels,code',
            'libelle' => 'string|required|unique:levels,libelle',
            'scolarite' => 'integer|required',
        ]);
        try {

            //Recuperer l'année dont le active = '1'

            $activeSchoolYear = SchoolYear::where('active', '1')->first(); // first et non get() car je veux recuperer un seul element

            $level->code = $this->code;
            $level->libelle = $this->libelle;
            $level->scolarite = $this->scolarite;
            $level->school_year_id = $activeSchoolYear->id; //ça doit indexé l'ID de celui est actif
            $level->save();

            return redirect()->route('niveaux')->with('success', 'Niveau ajouté');
        } catch (Exception $e) {
            //Sera pris en compte si on a un problème


        }
    }


    public function render()
    {
        return view('livewire.create-level');
    }
}
