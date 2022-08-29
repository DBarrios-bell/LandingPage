        </div>
            <div class="modal-footer">
                @if ($winners == null)
                <a href="{{ route('user') }}" type="button" class="btn btn-outline-secondary">Registrarse</a>
                @else
                <a href="{{ route('user') }}" type="button" class="btn btn-outline-secondary">Cerrar</a>
                @endif
            </div>
        </div>
    </div>
</div>
