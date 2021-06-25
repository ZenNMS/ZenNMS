<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceInterfacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, Device $device)
    {
        return view('zen.device.device-interfaces', [
            'device' => $device,
            'interfaces' => $device->interfaces()
                ->orderBy('index', 'asc')
                ->paginate(12),
        ]);
    }
}
