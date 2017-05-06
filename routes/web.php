<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
	return 'Hello world t3h!';
});
/**
 * TODO - Cac ban co the tim hieu them ve route tai duong dan
 * https://laravel.com/docs/5.4/routing
 */
// request method = get -- login
Route::get('login', 'Auth\LoginController@login')->name('login');

// request method = post -- login
Route::post('login', 'Auth\LoginController@postLogin');

// request method = get -- dashboard
// Yeu cau nguoi dung phai dang nhap roi moi duoc truy cap bang middleware auth
Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function(){
	// Dashboard index
	Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

	Route::get('categories', 'Admin\CategoryController@index')->name('category.index');

	Route::post('add-cate', 'Admin\CategoryController@addNew')->name('category.add');

});

// request method = get -- logout
// Dang xuat ra khoi he thong va dieu huong nguoi dung ve trang dang nhap
Route::get('logout', function(){
	Auth::logout();
	return redirect()->route('login');
})->name('logout');

// https://laravel.com/docs/5.4/eloquent
// Lấy danh sách của role
// Route::get('list-roles', function(){
// 	$roles = Role::all();
// 	return response()->json($roles);
// });

// Route::get('nguyen-hieu', function(){
// 	return "Xin chao, Nguyen Hieu!";
// });

// Tạo mới 1 role
// Route::get('add-role/{id}/{name}', function($id, $name){
// 	$role = new Role();
// 	$role->id = $id;
// 	$role->name = $name;
// 	$role->save();

// 	$roles = Role::all();
// 	return response()->json($roles);
// });

// // Lấy ra 1 role
// Route::get('get-role/{id}', function($id){
// 	$role = Role::find($id);
// 	return response()->json($role);
// });

// // Xoá 1 role
// Route::get('remove-role/{id}', function($id){
// 	$role = Role::find($id);
// 	$role->delete();
// 	$roles = Role::all();
// 	return response()->json($roles);
// });