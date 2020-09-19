@extends('layouts.app')

@section('content')
     <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.'.$name.'.index') }}">@lang('models/'.$name.'.singular')</a>
            </li>
            <li class="breadcrumb-item active">@lang('crud.detail')</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
            @include('partials/error')
             <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>@lang('crud.detail')</strong>
                                  <a href="{{ route('admin.'.$name.'.index') }}" class="btn btn-ghost-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @foreach($data->getAttributes() as $key => $value)
                                     <table class="table">
                                         <tbody>
                                         <tr>
                                             <td width="30%">
                                                 {{__('models/'.$name.'.fields.'.$key)}}
                                             </td>
                                             <td>
                                                 {{$value}}
                                             </td>
                                         </tr>
                                         </tbody>

                                     </table>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div>
@endsection
