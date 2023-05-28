<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;

class CrearPersona extends Component
{
    public $open = false;
    public $nombre, $dni, $correo;
    protected $rules = [
        'nombre' => 'required | max:10',
        'correo' => 'required | max:50'
    ];

    public function updated($propiedad)
    {
        $this->validateOnly($propiedad);
    }

    public function render()
    {
        return view('livewire.crear-persona');
    }

    public function guardar()
    {
        $this->validate();

        empleado::create([
            'nombre' => $this->nombre,
            'correo' => $this->correo
        ]);

        $this->reset(['open', 'nombre', 'correo']);
        $this->emit('render');
        $this->emit('alert', ['mensaje' => 'Se agrego correctamente']);
    }
}
