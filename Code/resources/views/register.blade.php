@extends('Base_Code.base')
    <!--Título-->
    @section('Title', 'Registration')

    <!--Formulário de cadastro-->
    @section('Content')
        <form action="{{ route('SiteController.register_post') }}" method="post" class="p-2 bg-dark">
            @csrf
            <div class="row g-3 mt-1 mb-4">
                <!--Input para o nome-->
                <div class="col">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                </div>

                <!--Input para o email-->
                <div class="col">
                    <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
                </div>
            </div>

            <!--Input para o email-->
            <div class="mb-4">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>

            <!--Input para o número de telefone-->
            <div class="mb-4">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
            </div>

            <!--Input para o endereço-->
            <div class="mb-4">
                <input type="text" name="address" id="address" class="form-control" placeholder="Address" required>
            </div>

            <!--Input para a observação-->
            <div class="mb-4">
                <textarea row="5" name="observation" id="observation" type="text" class="form-control" placeholder="Observation"></textarea required>
            </div>

            <!--Botões-->
            <footer>
                <!--Confirma o registro-->
                <button type="submit" class="btn btn-success">Register</button>
                
                <!--Volta para a página principal-->
                <button type="button" class="btn btn-danger"><a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.index') }}">Go back</a></button>
                
                <!--Limpa os campos do formulário-->
                <button type="reset" class="btn btn-primary">Clean</button>
            </footer>
        </form>
    @endsection