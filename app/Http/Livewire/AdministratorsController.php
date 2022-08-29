<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdministratorsController extends Component
{
    public function render()
    {
        $userall = User::all();
        $contador = $userall->count();
        $winner = User::where('winner','1')->first();
        $usuarios = User::join('cities as c','c.id','users.id_ciudad')
        ->join('departaments as d','d.id','users.id_departamento')
        ->select('users.*','d.departamento as departamento','c.ciudad as ciudad')->get();

        return view('livewire.administrator',[
             'users' => $usuarios,
             'count'=> $contador,
             'winner'=> $winner
        ])->extends('layouts.app')->section('content');
    }

    public function update()
    {
       $id = User::select()->inRandomOrder()->first()->id;
        User::where('id',$id)->update(['winner'=> true]);
    }
}
