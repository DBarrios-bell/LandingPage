<div class="container">
    <div class="row justify-content-center">
        <div class="card-header d-grid gap-2 d-md-flex justify-content-md-start">
            <h3>{{ __('Datos Personales') }}
        </div>
        <div class="card-body">
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="row mb-2">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-8">
                    <input type="text" wire:model.lazy="nombre"
                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                    @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <label for="apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                <div class="col-md-8">
                    <input type="text" wire:model.lazy="apellido"
                        class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                        value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Numero de cedula') }}</label>

                <div class="col-md-8">
                    <input type="number" wire:model.lazy="cedula"
                        class="form-control @error('cedula') is-invalid @enderror" name="cedula"
                        value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>

                    @error('cedula')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <label for="departamento" class="col-md-4 col-form-label text-md-end">{{ __('departamento') }}</label>

                <div class="col-md-8">
                    <select id="" wire:model.lazy="departamento"
                        class="form-control @error('departamento') is-invalid @enderror" required autofocus>
                        <option value="">::Seleccione::</option>
                        @foreach ($departaments as $d)
                            <option value="{{ $d->id }}">{{ $d->departamento }}</option>
                        @endforeach
                    </select>

                    @error('departamento')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            @if (!is_null($ciudades))
                <div class="row mb-2">
                    <label for="ciudad" class="col-md-4 col-form-label text-md-end">{{ __('Ciudad') }}</label>
                    <div class="col-md-8">
                        <select id="" wire:model.lazy="ciudad"
                            class="form-control @error('ciudad') is-invalid @enderror" required>
                            <option value="">::Seleccione::</option>
                            @foreach ($ciudades as $c)
                                <option value="{{ $c->id }}">{{ $c->ciudad }}</option>
                            @endforeach
                        </select>

                        @error('ciudad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            @endif


            <div class="row mb-2">
                <label for="celular" class="col-md-4 col-form-label text-md-end">{{ __('Numero de Celular') }}</label>

                <div class="col-md-8">
                    <input type="number" wire:model.lazy="celular"
                        class="form-control @error('celular') is-invalid @enderror" name="celular"
                        value="{{ old('celular') }}" required autocomplete="celular" autofocus>

                    @error('celular')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <label for="correo"
                    class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                <div class="col-md-8">
                    <input id="" type="email" wire:model.lazy="correo"
                        class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo') }}"
                        required="required" autocomplete="correo">
                    @error('correo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-12">
                    <input id="defaultCheck1" type="checkbox" wire:model.lazy="habeasdata"
                        class="form-check-input @error('habeasdata') is-invalid @enderror">“Autorizo el tratamiento de
                    mis datos de acuerdo con lafinalidad establecida en la política de protección de datos
                    personales”.<a href="" style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#exampleModal">clic aqui</a>

                    @error('habeasdata')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-md-6 offset-md-4">
                    <button type="button" wire:click.prevent="store()"
                        class="btn btn-outline-success">Guardar</button>
                    @if (!is_null($winners))
                        <a href="{{route('ganador')}}" type="button" class="btn btn-outline-warning">ver Ganador</a>
                    @endif
                </div>
            </div>

        </div>

    </div>
</div>


@include('livewire.component.politica')
