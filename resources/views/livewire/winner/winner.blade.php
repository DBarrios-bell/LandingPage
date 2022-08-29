@include('livewire.winner.common.modalHead')
@if ($winners == null)
    <h1>debe salir esto</h1>

@else
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <div class="containerImage">
                <div class="form-image form-container container">
                    <video class="video-fluid" autoplay loop muted style="height: 200px; width: 200px">
                        <source src="media/congratulation.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
        <div class="card-body">
            @foreach ($wins as $w)
                <h5 class="card-title">{{ $w->nombre . ' - ' . $w->cedula }}</h5>
                <p class="card-text">Felicidades, has sido el ganador de este concurso.</p>
                <small class="text-muted">Fecha Registro: {{ $w->created_at }}</small>
                <small class="text-muted">Departamento: {{ $w->departamento }}</small>
                <small class="text-muted">Ciudad: {{ $w->ciudad }}</small>
                <small class="text-muted">Correo: {{ $w->celular }}</small>
            @endforeach
        </div>

    </div>
</div>
@endif

@include('livewire.winner.common.modalFooter')
@include('livewire.winner.common.script')
