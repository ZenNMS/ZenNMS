<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceSearchRequest;
use App\Models\Device;
use App\Models\Vendor;
use Illuminate\Http\Request;

class DeviceSearchController extends Controller
{
    /**
     * Display the search results.
     */
    public function index(DeviceSearchRequest $request)
    {
//        $devices = Device::search($request->hostname)->get();
        $filters = $this->getFilters($request->validated());

        if (count($filters) > 0) {

            $query = Device::select();

            $vendorIds = [];

            if (isset($filters['vendor'])) {
                $vendorIds = $this->getVendorIds($filters['vendor']);
            }

            $query = $this->addFilters($query, $filters, $vendorIds);

            return view('zen.device.index', [
                'devices' => $query->get()
            ]);
        }

        return view('zen.device.index', [
            'devices' => Device::paginate(12),
        ]);
    }

    private function addFilters($query, $filters, $vendors) {

        $index = 1;

        foreach ($filters as $key => $value) {

            if ($key === 'vendor' && count($vendors) > 0) {

                $query = $this->getVendorsQuery($query, $vendors, $index);

            } elseif($key !== 'vendor') {

                $query = $this->getDeviceQuery($query, $key, $value, $index);
            }

            $index++;
        }

        return $query;
    }

    private function getVendorsQuery($query, $vendors, $index)
    {
        if ($index > 1) {
            return $query->orWhereIN('vendor_id', $vendors);
        }

        return $query->whereIN('vendor_id', $vendors);
    }

    private function getDeviceQuery($query, $column, $value, $index)
    {
        if ($index > 1) {
            return $query->orWhere($column, 'like', '%'.$value.'%');
        }

        return $query->where($column, 'like', '%'.$value.'%');
    }

    private function getFilters(array $validated): array
    {
        $filters = [];

        foreach ($validated as $key => $value) {
            if (!is_null($value)) {
                $filters[$key] = $value;
            }
        }

        return $filters;
    }

    private function getVendorIds(string $vendor): array
    {
        $vendors = Vendor::select('id')
            ->where('enterprise_name', 'like', '%'.$vendor.'%')
            ->get();

        $vendorIds = $vendors->pluck('id');

        return $vendorIds->toArray();
    }
}
