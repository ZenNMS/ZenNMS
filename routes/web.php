<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceInterfacesController;
use App\Http\Controllers\DeviceInventoryController;
use App\Http\Controllers\DeviceNeighboursController;
use App\Http\Controllers\DeviceSearchController;
use App\Http\Controllers\DeviceWirelessAccessPointsController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\InterfacesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\WirelessAccessPointController;
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

    Route::post('devices', [DeviceSearchController::class, 'index'])
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

    Route::get('device/{device}/interfaces', DeviceInterfacesController::class)
        ->name('device.interfaces');

    Route::get('device/{device}/inventory', [DeviceInventoryController::class, 'index'])
        ->name('device.inventory');

    Route::get('device/{device}/neighbours', [DeviceNeighboursController::class, 'index'])
        ->name('device.neighbours');

    Route::get('device/{device}/wireless-access-points', DeviceWirelessAccessPointsController::class)
        ->name('device.wireless-access-points');

    /**
     * Interface Routes
     */

    Route::resource('interface', InterfacesController::class)
        ->except(['index', 'create', 'destroy']);

    /**
     * Wireless Access Points Routes
     */

    Route::get('wireless-access-point/{wap}', [WirelessAccessPointController::class, 'show'])
        ->name('wap.show');
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
