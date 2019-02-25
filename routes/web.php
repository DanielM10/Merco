<?php
//****************FALTAN CREAR LOS CONTROLLERS Y LOS MODELOS DE ALGUNOS METODOS****//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//-------------------------INCIO DE RUTAS DE CONTROLADORES-------------------------//
//------------------------------RUTAS DE DETALLE-----------------------------------//
Route::get('/detalleordenes', 'detallesController@detalleordenes')->name('detalleordenes');
Route::get('/detalleentregas', 'detallesController@detalleentregas')->name('detalleentregas');


//---------------------------------------------------------------------------------//
//---------------------------CONTROLADOR EXCEL Y PDF-------------------------------//
Route::get('/export_proveedores', 'ExcelController@export_proveedores')->name('exportproveedores');
Route::get('/export_ordenes', 'ExcelController@export_ordencompra')->name('exportcompra');
Route::get('/export_entregas', 'ExcelController@export_ordenentrega')->name('exportentrega');
Route::get('/export_pagos', 'ExcelController@export_pagos')->name('exportpagos');
//RUTAS PARA PDF
Route::get('/export_pdfusuarios', 'PDFController@export_pdf')->name('exportpdfusuarios');
//rutas finales de PDF
Route::get('/export_pdfproveedores', 'PDFController@export_pdf')->name('exportpdfproveedores');
Route::get('/export_pdfordenes', 'PDFController@export_pdf_ordenescompra')->name('exportpdfordenes');
Route::get('/export_pdfentregas', 'PDFController@export_pdf_entrega')->name('exportpdfentregas');
Route::get('/export_pdfpagos', 'PDFController@export_pdf_pagos')->name('exportpdfpagos');

//---------------------------RUTAS PARA ACCIONES DE LOGIN Y LOGOUT----------------------------------------//
Route::resource('usuario2','usuariocontroller');
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('postLogin','Auth\LoginController@postLogin')->name('postLogin');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('usuario', 'usuariocontroller@index');
Route::post('login2', 'Auth\LoginController@postLogin');
//-----------------------------RUTA PARA CAMBIO DE PASSWORD PER USER-------------------
Route::get('cambiopass','usuariocontroller@cambiopass')->name('cambiopass');
Route::post('usuarioedit2','usuarioController@update2')->name('usuarioedit2');
Route::post('usuariopermisos','usuarioController@updatepermisos')->name('updatepermisos');
//---------------------------------------------------------------------------------//
//---------------------------RUTAS PARA ACCIONES DE CONFIGURACION----------------------------------------//
Route::get('configuracion', 'configuracioncontroller@index');
Route::post('configuracionupdate','configuracioncontroller@update')->name('configuracionupdate');
//---------------------------------------------------------------------------------//
//---------------------------RUTAS PARA ACCIONES DE USUARIOS----------------------------------------//
Route::delete('usuarioborrar','usuarioController@destroy')->name('usuarioborrar');
Route::get('usuario/get/{id}', 'usuarioController@getcombos');
Route::get('usuario','usuariocontroller@index');
Route::post('usuarioadd','usuarioController@store')->name('usuarioadd');
Route::post('usuarioedit','usuarioController@update')->name('usuarioedit');
Route::post('passupdate','usuarioController@passupdate')->name('passupdate');
//---------------------------------------------------------------------------------//
//---------------------------RUTAS PARA ACCIONES DE HOME----------------------------------------//
Route::delete('homeborrar','homeController@destroy')->name('homeborrar');
Route::get('home','homecontroller@index');
Route::get('home/','homecontroller@index');
Route::post('homeadd','homeController@store')->name('homeadd');
Route::post('homeedit','homeController@update')->name('homeedit');
//---------------------------------------------------------------------------------//
//---------------------------RUTAS PARA ACCIONES DE ROLES----------------------------------------//
Route::delete('rolborrar','rolesController@destroy')->name('rolborrar');
Route::get('roles','rolescontroller@index');
Route::post('rolesadd','rolesController@store')->name('rolesadd');
Route::post('rolesedit','rolesController@update')->name('rolesedit');
//---------------------------------------------------------------------------------//
//-------------------------RUTAS PARA ACCIONES DE DEPARTAMENTO--------------------------------
Route::delete('departamentoborrar','departamentoController@destroy')->name('departamentoborrar');
Route::get('departamento','departamentoController@index');
Route::post('departamentoadd','departamentoController@store')->name('departamentoadd');
Route::post('departamentoedit','departamentoController@update')->name('departamentoedit');
//---------------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA PROFESION--------------------------
Route::delete('profesionborrar','profesioncontroller@destroy')->name('profesionborrar');
Route::get('profesion','profesioncontroller@index');
Route::post('profesionadd','profesioncontroller@store')->name('profesionadd');
Route::post('profesionedit','profesioncontroller@update')->name('profesionedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA PROVEEDORES--------------------------
Route::delete('proveedoresborrar','proveedorescontroller@destroy')->name('proveedorborrar');
Route::get('proveedores','proveedorescontroller@index');
Route::post('proveedoresadd','proveedorescontroller@store')->name('proveedoradd');
Route::post('proveedoresedit','proveedorescontroller@update')->name('proveedoredit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA DIRECTORIO--------------------------
Route::delete('directorioborrar','directoriocontroller@destroy')->name('directorioborrar');
Route::get('directorio','directoriocontroller@index');
Route::post('directorioadd','directoriocontroller@store')->name('directorioadd');
Route::post('directorioedit','directoriocontroller@update')->name('directorioedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA SERVICIOS PRODUCTOS--------------------------
Route::delete('serviciosproductosborrar','serviciosproductoscontroller@destroy')->name('serviciosproductosborrar');
Route::get('serviciosproductos','serviciosproductoscontroller@index');
Route::post('serviciosproductosadd','serviciosproductoscontroller@store')->name('serviciosproductosadd');
Route::post('serviciosproductosedit','serviciosproductoscontroller@update')->name('serviciosproductosedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA ORDENES COMPRA--------------------------
Route::delete('ordenescompraborrar','ordenescompracontroller@destroy')->name('ordenescompraborrar');
Route::get('ordenescompra','ordenescompracontroller@index');
Route::post('ordenescompraadd','ordenescompracontroller@store')->name('ordenescompraadd');
Route::post('ordenescompraedit','ordenescompracontroller@update')->name('ordenescompraedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA ENTREGAS--------------------------
Route::delete('entregasborrar','entregasontroller@destroy')->name('entregasborrar');
Route::get('entregas','entregascontroller@index');
Route::post('entregasadd','entregascontroller@store')->name('entregasadd');
Route::post('entregasedit','entregascontroller@update')->name('entregasedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA PAGOS--------------------------
Route::delete('pagosborrar','pagoscontroller@destroy')->name('pagosborrar');
Route::get('pagos','pagoscontroller@index');
Route::post('pagosadd','pagoscontroller@store')->name('pagosadd');
Route::post('pagosedit','pagoscontroller@update')->name('pagosedit');
//-----------------------------------------------------
//--------------------------RUTAS DE ACCIONES PARA ACLARACIONES--------------------------
Route::delete('aclaracionesborrar','aclaracionescontroller@destroy')->name('aclaracionesborrar');
Route::get('aclaraciones', 'aclaracionescontroller@index');
Route::post('aclaracionesadd','aclaracionescontroller@store')->name('aclaracionesadd');
Route::post('aclaracionesedit','aclaracionescontroller@update')->name('aclaracionesedit');
//-----------------------------------------------------
//RESETEO DEL PASSWORD
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ResetPasswordController@reset');
Route::get('/changePassword','HomeController@showChangePasswordForm');
//---------------------
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('reset', 'Auth\ResetPasswordController@index')->name('reset');
//---------------------------- FIN DE RESETEO DE PASSWORD
// NO DEJES ABIERTAS COSAS EN EL SERVER / \\\
//------------------------FIN DE RUTAS DE CONTROLADORES----------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------//
//---------------------------LSCA DANIEL MORGADO MORALES---------------------------//
//--------------------------------AXSIS TECNOLOGIA---------------------------------// 




 // Verificar datos
//&Route::get('logout', 'Auth\LoginController@logOut'); // Finalizar sesión
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
