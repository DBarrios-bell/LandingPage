<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class WinnersController extends Component
{
    public function render()
    {
        $winner = User::where('winner','1')->first();
        $winn =  User::join('cities as c','c.id','users.id_ciudad')
        ->join('departaments as d','d.id','users.id_departamento')
        ->select('users.*','d.departamento as departamento','c.ciudad as ciudad')
        ->where('winner','1')->get();
        return view('livewire.winner.winner',[
            'winners' => $winner,
            'wins' => $winn
        ])->extends('layouts.app')->section('content');
    }
}
