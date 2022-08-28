@include('livewire.component.common.modalHead')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha Registro</th>
            <th scope="col">Nombre Apellido</th>
            <th scope="col">Cedula</th>
            <th scope="col">Departamento</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Celular</th>
            <th scope="col">Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
        <tr style="font-size: 13px">
        <th scope="row">{{$u->id}}</th>
        <td>{{$u->created_at}}</td>
        <td>{{$u->nombre ." ". $u->apellido}}</td>
        <td>{{$u->cedula}}</td>
        <td>{{$u->departamento}}</td>
        <td>{{$u->ciudad}}</td>
        <td>{{$u->celular}}</td>
        <td>{{$u->correo}}</td>
        </tr>
        @endforeach
    </tbody>

</table>
@include('livewire.component.common.modalFooter')
