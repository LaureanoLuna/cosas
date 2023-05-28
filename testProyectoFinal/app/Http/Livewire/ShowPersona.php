<?php

namespace App\Http\Livewire;

use App\Models\empleado;
use Livewire\Component;
use App\Models\Persona;

class ShowPersona extends Component
{
    /*  public $nombre; */
    /* 
    public function mount($nombre)
    {
        $this->nombre = $nombre;
    } */

    /*   public function mount($nombre){

        $this->nombre = $nombre;
    } */

    public $filtro;
    public $sort = 'id';
    public $direccion = 'desc';

    protected $listeners = ['render'=> 'render'];


    public function render()
    {
        $personas = empleado::where('nombre','like',$this->filtro.'%')->orWhere('correo','like',$this->filtro.'%')->orderBy($this->sort,$this->direccion)->get();
               
        return view('livewire.show-persona',compact('personas'));
    }

    public function order($sort)
    {
        if ($this->sort === $sort) {
            if($this->direccion == 'desc'){
                $this->direccion = 'asc';
            }else{
                $this->direccion='desc';
            }
        }else{
            $this->sort = $sort;
            $this->direccion='asc';
        }
        
    }
}
