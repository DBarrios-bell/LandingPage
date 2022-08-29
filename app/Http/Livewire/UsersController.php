<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Departament;
use App\Models\User;
use Livewire\Component;


class UsersController extends Component
{
    public $nombre, $apellido, $cedula, $departamento = null, $ciudad, $celular, $correo, $habeasdata;
    public  $ciudades =null;

    public function render()
    {
        $departamentos = Departament::all();

        return view('livewire.users',[
            'departaments' => $departamentos,
            ])->extends('layouts.app')->section('content');
    }

    public function updateddepartamento($id)
    {
        $this->ciudades = City::where('id_departamento', $id)->get();
    }

    public function store()
    {
        $rules = [
            'nombre'=> 'required|alpha|min:4',
            'apellido'=> 'required|alpha|min:6',
            'cedula'=> 'required|integer|min:5',
            'departamento'=> 'required',
            'ciudad'=> 'required',
            'celular'=> 'required|integer|min:10',
            'correo'=> 'required|email',
            'habeasdata'=>'required'
        ];

        $this->validate($rules);

        $user = User::create([
            'nombre'=>$this->nombre,
            'apellido'=>$this->apellido,
            'cedula'=>$this->cedula,
            'id_departamento'=>$this->departamento,
            'id_ciudad'=>$this->ciudad,
            'celular'=>$this->celular,
            'correo'=>$this->correo,
            'habeasdata'=>$this->habeasdata,
        ]);

        $user->save();
        $this->resetUI();
        session()->flash('status', 'Felicidades! Te encuentras participando en el concurso');
    }

    public function resetUI(){
        $this->nombre = '';
        $this->apellido = '';
        $this->cedula ='';
        $this->departamento='';
        $this->ciudad='';
        $this->celular='';
        $this->correo='';
        $this->habeasdata ='';
    }
}
