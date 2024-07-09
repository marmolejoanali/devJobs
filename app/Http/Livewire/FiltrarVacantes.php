<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class FiltrarVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;


    public function leerDatosFormulario(){
        //en terminosBusqueda es para conectar al componente HomeVacantes y alla se agrega en el listeners
        $this->emit('terminosBusqueda',$this->termino,$this->categoria,$this->salario);
    }
    public function render()
    {

        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view('livewire.filtrar-vacantes', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
