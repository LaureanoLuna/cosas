<?php

namespace App\Http\Livewire;

use App\Http\Controllers\PersonaController;
use App\Models\Persona;
use Livewire\Component;

class FormPers extends Component
{
    public $nombre;
    public $email;
    public $dni;

    protected $rules=[
        'nombre' => 'required|min:3|max:10',
        'email' => 'required',
        'dni'=>'required|length:8'
    ];

    public function submit(){
        $this->validate();
        dd($this);
        $personaController = new PersonaController();
        $personaController->create([
            'nombre'=>$this->nombre,
            'email'=>$this->email,
            'dni' => $this->dni
        ]);
    }

    public function render()
    {
        return view('livewire.form-pers');
    }
}
