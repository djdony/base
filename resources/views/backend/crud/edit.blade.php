@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('admin.'.$name.'.index') !!}">@lang('models/'.$name.'.singular')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
            @include('partials/error')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit @lang('models/'.$name.'.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($data, ['route' => ['admin.'.$name.'.update', $data->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                              @include('backend.'.$name.'.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
