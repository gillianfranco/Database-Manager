@extends('Base_Code.base')
    <!--Título-->
    @section('Title', 'Client Data')  

    <!--Tabela de Dados-->
    @section('Content')
        <table class="table table-dark table-striped">
            <!--Título da tabela-->
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>

            <!--Clientes-->
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <!--Id do cliente-->
                    <th scope="row">
                        <a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.data_client', $client->id) }}">
                            {{ $client->id }}
                        </a>
                    </th>

                    <!--Nome do cliente-->
                    <td>
                        <a style="text-decoration: none;" class="text-light"  href="{{ route('SiteController.data_client', $client->id) }}">
                            {{ $client->name }}
                        </a>
                    </td>

                    <!--Email do cliente-->
                    <td>
                        <a style="text-decoration: none;" class="text-light"  href="{{ route('SiteController.data_client', $client->id) }}">
                            {{ $client->email }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        <!--Botão para ir para a página de cadastro-->
        <footer class="p-1">
            <button type="button" class="btn btn-success"><a style="text-decoration: none;" class="text-light" href="{{ route('SiteController.register_get') }}">Register</a></button>
        </footer>
    @endsection