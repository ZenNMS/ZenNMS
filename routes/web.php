<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceInterfaceController;
use App\Http\Controllers\DeviceInventoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ToolsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('zen.app');
});

Route::prefix('nms')->group(function () {

    /**
     * Device Routes
     */

    Route::get('devices', [DeviceController::class, 'index'])
        ->name('device.index');

    Route::get('device/create', [DeviceController::class, 'create'])
        ->name('device.create');

    Route::post('device', [DeviceController::class, 'store'])
        ->name('device.store');

    Route::get('device/{device}', [DeviceController::class, 'show'])
        ->name('device.show');

    Route::put('device/{device}', [DeviceController::class, 'update'])
        ->name('device.update');

    Route::delete('device/{device}', [DeviceController::class, 'destroy'])
        ->name('device.destroy');

    Route::get('device/{device}/edit', [DeviceController::class, 'edit'])
        ->name('device.edit');

    Route::get('device/{device}/interfaces', [DeviceInterfaceController::class, 'index'])
        ->name('device.interfaces');

    Route::get('device/{device}/inventory', [DeviceInventoryController::class, 'show'])
        ->name('device.inventory');

    /**
     * Interface Routes
     */

    Route::resource('interface', DeviceInterfaceController::class)
        ->except(['index', 'create', 'destroy']);
});



Route::resource('group', GroupController::class);
Route::resource('rack', RackController::class);
Route::resource('site', SiteController::class);

/**
 * Routes for Dashboard
 */
Route::get('dashboard', DashboardController::class)
    ->name('dashboard');

/**
 * Routes for Profile
 */
Route::get('profile', [ProfileController::class, 'show'])
    ->name('profile');
Route::get('profile/edit', [ProfileController::class, 'edit'])
    ->name('profile.edit');
Route::post('profile', [ProfileController::class, 'update'])
    ->name('profile.update');

/**
 * Routes for tools
 */
Route::get('tools', ToolsController::class)
    ->name('tools');

/**
 * Routes for Settings
 */
Route::get('settings', [SettingsController::class, 'show'])
    ->name('settings');
Route::get('settings/edit', [SettingsController::class, 'edit'])
    ->name('settings.edit');
Route::post('settings', [SettingsController::class, 'update'])
    ->name('settings.update');
