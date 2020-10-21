<?php



Route::get('/', function () {return view('pages.index');});
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


   // Admin section
// Categories
Route::get('admin/categories', 'Admin\category\CategoryController@category')->name('categories');
Route::post('admin/stroe/category', 'Admin\category\CategoryController@storeCategory')->name('store.category');
Route::get('delete/category/{id}', 'Admin\category\CategoryController@deleteCategory');
Route::get('edit/category/{id}', 'Admin\category\CategoryController@editCategory');
Route::post('update/category/{id}', 'Admin\category\CategoryController@updateCategory');

// Brands
Route::get('admin/brands', 'Admin\category\Brandcontroller@brand')->name('brands');
Route::post('admin/stroe/brand', 'Admin\category\Brandcontroller@storebrand')->name('store.brand');
Route::get('delete/brand/{id}', 'Admin\category\Brandcontroller@deletebrand');
Route::get('edit/brand/{id}', 'Admin\category\Brandcontroller@editbrand');
Route::post('update/brand/{id}', 'Admin\category\Brandcontroller@updatebrand');
// sub categories
Route::get('admin/sub/category', 'Admin\category\SubCategoryController@subcategories')->name('sub.categories');
Route::post('admin/stroe/subcategory', 'Admin\category\SubCategoryController@storesubcat')->name('store.subcategory');
Route::get('delete/subcategory/{id}', 'Admin\category\SubCategoryController@deletesubcat');
Route::get('edit/subcategory/{id}', 'Admin\category\SubCategoryController@editsubcat');
Route::post('update/subcategory/{id}', 'Admin\category\SubCategoryController@updatesubcat');

// posts routes
Route::get('admin/posts/create', 'Admin\PostController@createpost')->name('create.post');
Route::get('admin/posts/all', 'Admin\PostController@index')->name('all.posts');
Route::post('admin/posts/store', 'Admin\PostController@storepost')->name('store.post');
Route::get('delete/post/{id}', 'Admin\PostController@deletepost');
Route::get('view/post/{id}', 'Admin\PostController@viewpost');
Route::get('edit/post/{id}', 'Admin\PostController@editpost');
Route::post('update/post/withoutphoto/{id}', 'Admin\PostController@updatepost');
Route::post('update/post/photo/{id}', 'Admin\PostController@updatephoto');







// activa/deactive
Route::get('admin/posts/activate/{id}', 'Admin\PostController@activate');
Route::get('admin/posts/deactivate/{id}', 'Admin\PostController@deactivate');

// single post

Route::get('{cat}/{slug}', 'HomeController@single');

// category frontend route
Route::get('category/{slug}/{id}', 'HomeController@showfrontend');

// search 
Route::post('inson/qidiruv/', 'HomeController@search')->name('search.inson');












