<div class="container p-4">
    @if ($winner == null && $count >= 5)
    <button type="button" wire:click.prevent="update()" class="btn btn-outline-success">Soltear Premio</button>
    @endif
    <a href="{{route('exportar')}}" type="button" class="btn btn-outline-secondary">Exportar Excel</a>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CEDULA</th>
                <th scope="col">DEPARTAMENTO</th>
                <th scope="col">CIUDAD</th>
                <th scope="col">CELULAR</th>
                <th scope="col">CORREO</th>
                <th scope="col">FECHA DE CREACION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                <tr>
                    <th scope="row">
                        {{ $u->id }}
                    </th>
                    <td>
                        {{ $u->nombre }}
                    </td>
                    <td>
                        {{ $u->apellido }}
                    </td>
                    <td>
                        {{ $u->cedula }}
                    </td>
                    <td>
                        {{ $u->departamento }}
                    </td>
                    <td>
                        {{ $u->ciudad }}
                    </td>
                    <td>
                        {{ $u->celular }}
                    </td>
                    <td>
                        {{ $u->correo }}
                    </td>
                    <td>
                        {{ $u->created_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <tbody>
</div>
