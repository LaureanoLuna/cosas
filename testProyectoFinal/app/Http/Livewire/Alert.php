<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $hola = 0;

    public function sumar()
    {
        $this->hola++;
    }

    public function restar()
    {
        $this->hola -= 0.5;
    }
    public function render()
    {
        return view('livewire.alert');
    }
}
