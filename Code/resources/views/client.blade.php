@extends('Base_Code.base')
    <!--Dados específicos de um determinado cliente-->
    @section('Content')
        <div class="card text-light m-2 border border-dark">
            <!--Título-->
            <div class="card-header bg-dark bg-opacity-75 border-bottom-light">
                Client -> {{ $clients->id }}
            </div>

            <div class="card-body bg-dark">
                <!--Dados do cliente-->
                <section>
                    <h1 class="card-title">{{ $clients->name }}</h1>
                    <div class="p-3">
                        <p class="card-text">Age: {{ $clients->age }}<br>Phone Number: {{ $clients->phone }}<br>Email: {{ $clients->email }}<br>Address: {{ $clients->address }}<br>Observation: {{ $clients->observation }}<br></p>
                    </div>
                </section>

                <!--Botão para voltar para a página principal-->
                <footer>
                    <button class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.index') }}">Go back</a></button>
                </footer>
            </div>
        </div>
    @endsection