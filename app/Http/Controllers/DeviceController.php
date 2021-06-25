<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('zen.device.index', [
            'devices' => Device::with(['type', 'vendor'])
                ->orderBy('hostname')
                ->paginate(12)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Device $device
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Device $device)
    {
        $data = [
            'device'     => $device,
            'interfaces' => (object) [
                'up'      => 0,
                'down'    => 0,
                'unknown' => 0,
            ],
        ];

        if ($device->interfaces_count > 0) {
            $data['interfaces'] = (object) [
                'up'      => $device->interfaces()->interfaceStatusUp()->count(),
                'down'    => $device->interfaces()->interfaceStatusDown()->count(),
                'unknown' => $device->interfaces()->interfaceStatusUnknown()->count(),
            ];
        }

        return view('zen.device.show', $data);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
