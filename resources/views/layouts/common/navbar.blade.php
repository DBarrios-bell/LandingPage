<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('admin')}}">Administrador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user')}}">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ganador')}}"></a>
                </li>
            </ul>
         </div>
    </div>
</nav>
