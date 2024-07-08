<?php


use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashAdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/post/{id}', [HomeController::class, 'getPost'])->name('post.details');





// For home page
Route::get('/Bar/about_us', [HomeController::class, 'about_us'])->name('Bar.about_us');
Route::get('/Bar/blog', [HomeController::class, 'blog'])->name('Bar.blog');
Route::get('/Bar/contact', [HomeController::class, 'contact'])->name('Bar.contact');
Route::get('/Bar/explore', [HomeController::class, 'explore'])->name('Bar.explore');



// Profiles
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show_blog'])->name('user.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit_blog'])->name('user.edit');
    Route::put('/profile', [ProfileController::class, 'update_blog'])->name('user.update');
});







// Account Routes

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register_user', [LoginController::class, 'register_user'])->name('register_user');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login_user', [LoginController::class, 'login_user'])->name('login_user');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//dashboard for user
Route::get('/user/dashboard',[Dashboardcontroller::class,'dashboard'])->name('account.dashboard');


//for email verification
Route::get('email/verify/{token}', [VerificationController::class, 'verify'])->name('verify');



// Reset Passwords
Route::get('passwords/forget-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('passwords.forget-password');
Route::post('passwords/forget-password_user', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('passwords.forget-password_user');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('passwords/reset_user', [ResetPasswordController::class, 'reset'])->name('passwords.reset_user');


// User dashboard

Route::middleware(['auth'])->group(function () {
    Route::get('/create', [Dashboardcontroller::class, 'create'])->name('user.create');
    Route::post('/store', [Dashboardcontroller::class, 'store'])->name('user.store');
    Route::get('/show', [Dashboardcontroller::class, 'show'])->name('user.show');
    Route::get('/{id}/edit', [Dashboardcontroller::class, 'edit'])->name('user.edit');
    Route::post('/{id}', [Dashboardcontroller::class, 'userupdate'])->name('user.update');
    Route::delete('/{id}', [Dashboardcontroller::class, 'destroy'])->name('user.destroy');
    Route::get('/my_blog', [DashboardController::class, 'my_blog'])->name('user.my_blog');
    Route::get('/manage_blog', [DashboardController::class, 'UserManageBlog'])->name('user.manage_blog');


});

//Admin profile
Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/profile', [AdminProfileController::class, 'show'])->name('admin.profile.show');
    Route::get('admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::put('admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
});



//Admin dashboard

Route::get('/dashboard',[DashAdminController::class,'dashboard'])->name('admin.dashboard');



// Blog Post Routes for Admin
Route::get('/add', [DashAdminController::class,"Addblog" ])->name('Addblog');
Route::post('/add_blog', [DashAdminController::class, 'Add_Blogs'])->name('Add_Blogs');
Route::get('/manage', [DashAdminController::class, 'Manageblogs'])->name('ManageBlogs');
Route::get('/delete_blog/{id}', [DashAdminController::class, 'DeleteBlog'])->name('DeleteBlog');
Route::get('/Edit_blog/{id}', [DashAdminController::class, 'EditBlog'])->name('EditBlog');
Route::post('/Update_blog/{id}', [DashAdminController::class, 'UpdateBlog'])->name('UpdateBlog');
Route::get('/accept/{id}', [DashAdminController::class, 'AcceptBlog'])->name('AcceptBlog');
Route::get('/reject/{id}', [DashAdminController::class, 'RejectBlog'])->name('RejectBlog');



Route::get('/admin/add-category', [DashAdminController::class, 'addCategory'])->name('add.category');
Route::post('/admin/store-category', [DashAdminController::class, 'storeCategory'])->name('store.category');
Route::get('/admin/manage-categories', [DashAdminController::class, 'manageCategories'])->name('manage.categories');
Route::get('/admin/edit-category/{id}', [DashAdminController::class, 'editCategory'])->name('edit.category');
Route::put('/admin/update-category/{id}', [DashAdminController::class, 'updateCategory'])->name('update.category');
Route::delete('/admin/delete-category/{id}', [DashAdminController::class, 'deleteCategory'])->name('delete.category');

Route::get('/category/{category}', [DashAdminController::class, 'postsByCategory'])->name('category.posts');

