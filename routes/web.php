<?php



Route::get('/', function () {
	$arr = ['asd'=>12323,'add'=>234234];
	debug($arr);
	Debugbar::error('Error!');
	// \Debugbar::disable();
	try {
		throw new Exception('foobar');
	} catch (Exception $e) {
		Debugbar::addThrowable($e);
	}
	return view('welcome');
});
