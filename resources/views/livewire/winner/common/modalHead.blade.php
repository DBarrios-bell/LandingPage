<div wire:ignore.self class="modal fade er" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header text-center">
                @if ($winners = null)
                    <h4 class="modal-title">Bienvenido</h4>
                @else
                    <h4 class="modal-title">Tenemos un Ganador</h4>
                @endif
            </div>
            <div class="modal-body">