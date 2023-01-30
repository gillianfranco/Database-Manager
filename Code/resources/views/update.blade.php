@extends('Base_Code.base')
    <!--Título-->
    @section('Title', 'Registration')

    <!--Formulário de cadastro-->
    @section('Content')
        <form action="{{ route('SiteController.update_register', $client->id) }}" method="post" class="p-2 bg-dark">
            @csrf
            <div class="row g-3 mt-1 mb-4">
                <!--Input para o nome-->
                <div class="col">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ $client->name }}" required>
                </div>

                <!--Input para a idade-->
                <div class="col">
                    <input type="number" name="age" id="age" class="form-control" placeholder="Age" value="{{ $client->age }}" required>
                </div>
            </div>

            <!--Input para o email-->
            <div class="mb-4">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ $client->email }}" required>
            </div>

            <!--Input para o número de telefone-->
            <div class="mb-4">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ $client->phone }}" required>
            </div>

            <!--Input para o endereço-->
            <div class="mb-4">
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{ $client->address }}" required>
            </div>

            <!--Input para a observação-->
            <div class="mb-4">
                <input name="observation" id="observation" type="text" class="form-control" placeholder="Observation" value="{{ $client->observation }}" required></input>
            </div>

            <!--Botões-->
            <footer>
                <!--Confirma o registro-->
                <button type="submit" class="btn btn-success">Register</button>
                
                <!--Volta para a página principal-->
                <button type="button" class="btn btn-primary"><a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.data_client', $client->id); }}">Go back</a></button>
            </footer>
        </form>
    @endsection