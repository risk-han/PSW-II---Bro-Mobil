<?php


use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Contact;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HighchartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExcelController;

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

// Route::get('/', function(){
//     $role = Role::find(1);
//     $role->givePermissionTo('manage-user');
// });

Route::get('beranda', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('login', [UserAuthController::class, 'login'])->name('login');

Route::get('register', [UserAuthController::class, 'register']);

Route::get('/reload-captcha', [UserAuthController::class, 'reloadCaptcha']);

Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');

Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');

Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('daftarmobil', [MobilController::class, 'index'])->name('daftarmobil');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::resource('search', PostController::class);
    Route::get('high-chart', [HighChartController::class, 'index'])->name('chart');
    Route::resource('products', ProductController::class);
    Route::get('/excel-export', [UserController::class, 'exportIntoExcel'])->name('excel');
});

Route::group(['middleware' => ['role:user']], function() {
    Route::get('/pembayaran/show/pdf',[PembayaranController::class, 'createPDF'])->name('pdf');
    Route::post('captcha-validation', [Contact::class, 'capthcaFormValidate'])->name('captcha-validation');
    Route::get('reload-captcha', [Contact::class, 'reloadCaptcha']);
    Route::get('/contact', [Contact::class, 'showContactForm'])->name('contact');
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('mobils', MobilController::class);
});

Auth::routes();


