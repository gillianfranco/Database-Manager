<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/**Redireciona para a view de exibição de dados dos clientes */
Route::get('/', [SiteController::class, 'index'])->name('SiteController.index');

/**Redireciona para uma página onde será mostrado os dados de somente um cliente */
Route::get('/client/{id}', [SiteController::class, 'data_client'])->name('SiteController.data_client');

/**Deleta os dados de um cliente especifíco */
Route::delete('/client/{id}', [SiteController::class, 'delete_client'])->name('SiteController.delete_client');

/**Redireciona o usuário para a página de cadastro */
Route::get('/register', [SiteController::class, 'register_get'])->name('SiteController.register_get');

/**Coleta os dados indicados no formulário e amarzena no banco de dados */
Route::post('/register', [SiteController::class, 'register_post'])->name('SiteController.register_post');

/**Redireciona para a página de atualização de dados */
Route::get('/register/{id}/update', [SiteController::class, 'update_get'])->name('SiteController.update');

/**Registra os dados atualizados */
Route::post('/register/{id}/update', [SiteController::class, 'update_post'])->name("SiteController.update_register");