<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/',function(){
	// return view('welcome');
	// echo "111";
	// echo date('Y-m-d H:i:s');

	// echo Config::get('app.timezone');
	// echo Config::get('app.url');
	// echo Config::get('app.locale');

	// Config::set('app.timezone','UTC');
	// echo Config::get('app.timezone');
	// echo Config::get('app.webname');

// 	echo env('DB_HOST');
// });

// Route::get('/test',function(){
// 	echo '111';
// });

// Route::get('tests/add',function(){
// 	echo '2222';
// });

// Route::get('user/add',function(){
// 	echo 'qqq';
// });

// Route::get('/form',function(){
// 	return view('form');
// });

// Route::get('shops/{id}',function($id){
// 	echo 'asdf'.$id;
// })->where('id','\d+');

// Route::get('shopss/{name}',function($name){
// 	echo 'adsfa'.$name;
// })->where('name','[a-z A-Z]');

// Route::get('/shopsss/{id}-{name}',function($id,$name){
// 	echo 'asdfads'.$id;
// 	echo 'adfa'.$name;
// })->where('id','\d+')->where('name','[a-z A-Z]');

Route::get('/admin/user/add',[
	'as'=>'uadd',
	function(){
		echo 'sdfs';
	}
]);

Route::get('/test',function(){
	echo route('uadd');
});

Route::group(['middleware'=>'login'],function(){
	Route::get('/home/order',function(){
		echo "前台订单";
	});

	Route::get('/admin/edit',function(){
		echo "这是后台用户的修改";
	});
});

Route::get('/ss',function(){
	abort('404');
});

Route::get('/ajax',function(){
	return view('ajax');
});

Route::post('/post',function(){
	echo 'ajax的响应数据';
});

Route::get('/login',function(){
	echo '这是登陆页面';
});

Route::get('/home/preson',function(){
	echo "这是前台的个人中心";
})->middleware('login');