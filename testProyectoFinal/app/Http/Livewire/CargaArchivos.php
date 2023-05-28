<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CargaArchivos extends Component
{

    use WithFileUploads;

    public $archivo; 

    public function save()
    {
        $this->validate([
            'archivo'=>'required'
        ],[
            'error' =>'el archivo es necesario',
            'messaje'=> 'algo anda mal'
        ]);
    }
    public function render()
    {
        return view('livewire.carga-archivos');
    }
}
