<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Intervention\Image\Facades\Image;
use Laracasts\Flash\Flash;
use Illuminate\Container\Container;



abstract class BaseController extends Controller
{
    protected $model;
    protected $request;
    protected $app;
    protected $name;

    public function __construct(Container $container)
    {
        $this->app = $container;
        try {
            $this->model = $container->make($this->set_model());
        } catch (BindingResolutionException $e) {
        }
    }

    abstract public function set_model();
    abstract public function set_request();

    public function index()
    {
        $data = $this->model->all();

        return view('backend.crud.index')
            ->with([
                'data' => $data,
                'name' => $this->name
            ]);
    }

    public function create()
    {
        return view('backend.crud.create')->with('name', $this->name);
    }

    public function store()
    {
        $request = $this->app->make($this->set_request());
        $model = $this->model->create($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $this->storeImage($image,200);
                $model->images()->create(['url' => $image->getClientOriginalName()]);
            }
        }

        Flash::success(__('messages.saved', ['model' => __('models/'.$this->name.'.singular')]));

        return redirect(route('admin.'.$this->name.'.index'));
    }

    public function show($id)
    {
        $data = $this->model->find($id);
        return view('backend.crud.show')
            ->with([
                'data' => $data,
                'name' => $this->name
            ]);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        return view('backend.crud.edit')
            ->with([
                'data' => $data,
                'name' => $this->name
            ]);
    }

    public function update($id)
    {
        $request = $this->app->make($this->set_request());
        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $this->storeImage($image,200);
                $model->images()->create(['url' => $image->getClientOriginalName()]);
            }
        }
        Flash::success(__('messages.updated', ['model' => __('models/'.$this->name.'.singular')]));

        return redirect(route('admin.'.$this->name.'.index'));
    }

    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return back();
    }

    protected function storeImage($image, $resize = null){
        $name = $image->getClientOriginalName();
        $path = $image->storeAs('images',$name, 'local');
        $save_path = public_path().'/images/thumbs/';
        if ($resize){
            Image::make($image)
                ->resize(null,$resize,function ($constraint){
                    $constraint->aspectRatio();
                })
                ->save($save_path.$name);
        }
    }
}
