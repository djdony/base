@isset($customers)
    <!-- Customer Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('customer', __('models/bookings.fields.customer').':') !!}
        {!! Form::select('customer_id', $customers, $customer->id ?? '', ['class' => 'form-control']) !!}
    </div>
@endisset
@isset($locations)
<!-- From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/locations.fields.from').':') !!}
    {!! Form::select('from_id', $locations, $location->id ?? '', ['class' => 'form-control']) !!}
</div>
<!-- To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', __('models/locations.fields.to').':') !!}
    {!! Form::select('to_id', $locations, $location->id ?? '', ['class' => 'form-control']) !!}
</div>
@endisset

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', __('models/bookings.fields.date').':') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>
<!-- price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', __('models/bookings.fields.price').':') !!}
    {!! Form::text('price', null, ['class' => 'form-control','id'=>'price']) !!}
</div>

@isset($currencies)
    <!-- currency Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('currency', __('models/bookings.fields.currency').':') !!}
        {!! Form::select('currency_id', $currencies, $currency->id ?? '', ['class' => 'form-control']) !!}
    </div>
@endisset

@isset($partners)
    <!-- currency Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('partner', __('models/bookings.fields.partner').':') !!}
        {!! Form::select('user_id', $partners, $partner->id ?? '', ['class' => 'form-control']) !!}
    </div>
@endisset

@push('scripts')
   <script type="text/javascript">
           $('#date').datetimepicker({
               format: 'YYYY-MM-DD HH:mm',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush
<!-- Flight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flight', __('models/bookings.fields.flight').':') !!}
    {!! Form::text('flight', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', __('models/bookings.fields.type').':') !!}
    {!! Form::select('type', ['1' => 'STANDART', '2' => 'VIP', '3' => 'GROUP'], null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('info', __('models/bookings.fields.info').':') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.bookings.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
