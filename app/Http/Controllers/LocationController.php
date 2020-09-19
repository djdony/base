<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class LocationController extends Controller
{

    public function index(Request $request)
    {
        $locations = Location::where('type', $request['type'])->with('ancestors')->get();

        return view('backend.locations.index',[
            'locations'=> $locations,
        ]);
    }


    public function create(Request $request)
    {
        $parentItems = Location::where('type', $request['type']-1)->pluck('name','id');
        return view('backend.locations.create',
            [
                'parentItems' =>$parentItems
            ]);
    }

    public function store(LocationRequest $request)
    {
        $location = Location::findOrFail($request['parent_id']);
        $location->children()->create([
            'name' => $request['name'],
            'type'=>$request['type']
        ]);

        Flash::success(__('messages.saved', ['model' => __('models/locations.singular')]));

        return redirect(route('admin.locations.index',['type'=>$request['type']]));
    }

    public function show($id)
    {
        $location = $this->locationRepository->find($id);

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        return view('backend.locations.show')->with('location', $location);
    }

    public function edit($id)
    {
        $location = Location::find($id);
        $parentItems = Location::where('type', $location['type'] - 1)->pluck('name','id');

        if (empty($location)) {
            Flash::error(__('messages.not_found', ['model' => __('models/locations.singular')]));

            return redirect(route('admin.locations.index'));
        }

        return view('backend.locations.edit',['parentItems'=>$parentItems])->with('location', $location);
    }

    public function update(Location $location, LocationRequest $request)
    {
        $location->update($request->validated());

        Flash::success(__('messages.updated', ['model' => __('models/locations.singular')]));

        return redirect(route('admin.locations.index',  ['type'=>$request['type']]));
    }

    public function destroy(Location $location)
    {
        $location->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/locations.singular')]));

        return back();
    }
}
