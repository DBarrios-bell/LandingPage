@include('livewire.winner.common.modalHead')
@if ($winners == null)
    <h3 class="main-title text-1-5xl sm:text-5xl  mb-2 font-normal font-lf-bold max-w-lg mx-auto text-left md:text-left"
        style="color:#0f1f40;">Deseas ser el ganador de este sorteo</span>
        <div class="main-title-anim-container flex text-left md:text-left">
            <span class="text-lf-teal main-title-parts trans opacity-100 block text-left md:text-left"
                style="width: 200px; color:#f99000; text-align: left">
                Recuerda</span>
            <span class=" block mx-1 sm:mx-2"> Dejar</span><span
                class="block text-lf-teal main-title-parts trans opacity-100" style="color:#f99000">tus datos</span>
        </div>
    </h3>
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
            <div class="col-md-8">
                <div class="card-body">
                    @foreach ($wins as $w)
                        <h5 class="card-title">{{ $w->nombre . ' - ' . $w->cedula }}</h5>
                        <p class="card-text">Felicidades, has sido el ganador de este concurso.</p>
                        <small class="text-muted">Fecha Registro: {{ $w->created_at }}</small>
                        <small class="text-muted">Departamento: {{ $w->departamento }}</small>
                        <small class="text-muted">Ciudad: {{ $w->ciudad }}</small>
                        <small class="text-muted">Correo: {{ $w->correo }}</small>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif

@include('livewire.winner.common.modalFooter')
@include('livewire.winner.common.script')
