
composer create-project laravel/laravel proyectoVeterinaria
php artisan migrate

php artisan make:model Mascota
php artisan make:model Kardex
php artisan make:model Doctor
php artisan make:model Servicio
php artisan make:model Cliente


php artisan make:controller Mascota
php artisan make:controller Kardex
php artisan make:controller Doctor
php artisan make:controller Servicio
php artisan make:controller Cliente


######Dudas

#Ir a "routes/web.php"

#Hacer las siguientes peticiones, con los métodos POST
Route::get('/post/{nombre}', function ($nombre) {
    return "Saludos de" . $nombre;
})


#En mi proyecto, definir los siguiente métodos  para cada controlador 
Route::get('/Insertar', [ClienteController::class, 'insertar']);
Route::get('/Eliminar', [ClienteController::class, 'eliminar']);
Route::get('/Actualizar', [ClienteController::class, 'Index']);

Route::get('/Insertar', [DoctorController::class, 'insertar']);
Route::get('/Eliminar', [DoctorController::class, 'eliminar']);
Route::get('/Actualizar', [DoctorController::class, 'Index']);

Route::get('/Insertar', [KardexController::class, 'insertar']);
Route::get('/Eliminar', [KardexController::class, 'eliminar']);
Route::get('/Actualizar', [KardexController::class, 'Index']);

Route::get('/Insertar', [MascotaController::class, 'insertar']);
Route::get('/Eliminar', [MascotaController::class, 'eliminar']);
Route::get('/Actualizar', [MascotaController::class, 'Index']);

Route::get('/Insertar', [ServicioController::class, 'insertar']);
Route::get('/Eliminar', [ServicioController::class, 'eliminar']);
Route::get('/Actualizar', [ServicioController::class, 'Index']);


#Ahora, dentro de cada script del controlador, dentro de la clase, los siguienres métodos:

public	function index(){
	return 'Hola soy el controlador de Cliente'
}

public function insertar(){
	//instancia en Memoria
	$objetoCliente = new Cliente();
	$objetoCliente->idcliente = 1;
	$objetoCliente->nombre = 'Gustavo';
	$objetoCliente->ciudad = 'Xalapa';
	$objetoCliente->direccion = 'Av. Siempre Viva S/N';
	$objetoCliente->edad = '41';
	$objetoCliente->telefono = '2281345345';
	$objetoCliente->save();
		return 'Insertando Controller Cliente'.$objetoCliente
}

public function eliminar(){
	return '¿Confirma que desea eliminar Controller de Cliente?';
}

public function actualizar(){
	return '¿Confirma que desea actualizar Controller de Cliente?';
}

#poner a todos los controladores el sufijo "Controles"