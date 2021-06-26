<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceWirelessAccessPointsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Device $device
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Device $device)
    {
        return view('zen.device.device-access-points', [
            'device' => $device,
            'access_points' => $device->wirelessAccessPoints()
                ->orderBy('name', 'asc')
                ->paginate(12),
        ]);
    }
}
