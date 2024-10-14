<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Un utente ha chiesto di lavorare con noi</h1>
                <h2>Ecco i suoi dati:</h2>
                <p>Nome : {{$user->name}}</p>
                <p>Email: {{$user->email}}</p>
                <p> Se vuoi renderlo revisor, clicca qui:</p>
                <a href="{{route('make.revisor', compact('user'))}}">Rendi revisor</a>
            </div>
        </div>
    </div>








</x-layout>