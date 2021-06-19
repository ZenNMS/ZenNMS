<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceInterface;
use Illuminate\Http\Request;

class DeviceInterfaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Device $device)
    {
        return view('zen.device.device-interfaces', [
            'device' => $device,
            'interfaces_count' => $device->interfaces()->count(),
            'inventory_count' => $device->inventory()->count(),
            'interfaces' => $device->interfaces()->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param DeviceInterface $interface
     * @return \Illuminate\Http\Response
     */
    public function show(DeviceInterface $interface)
    {
        return view('zen.interface.show', [
            'device' => $interface->device()
                ->select(['id', 'hostname', 'display_name'])
                ->first(),
            'interface' => $interface,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
