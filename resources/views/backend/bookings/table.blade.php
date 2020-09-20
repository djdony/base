<div class="table-responsive-sm">
    <table class="table table-striped" id="bookings-table">
        <thead>
            <tr>
                <th>@lang('models/bookings.fields.customer')</th>
                <th>@lang('models/bookings.fields.from')</th>
        <th>@lang('models/bookings.fields.to')</th>
        <th>@lang('models/bookings.fields.date')</th>
        <th>@lang('models/bookings.fields.flight')</th>
        <th>@lang('models/bookings.fields.type')</th>
        <th>@lang('models/bookings.fields.pax')</th>
        <th>@lang('models/bookings.fields.price')</th>
        <th>@lang('models/bookings.fields.currency')</th>
        <th>@lang('models/bookings.fields.info')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $booking)
            <tr>
                <td>{{ $booking->customer->name ?? ''}}</td>
                <td>{{ $booking->from->name ?? '' }}</td>
            <td>{{ $booking->to->name ?? '' }}</td>
            <td>{{ $booking->date ?? '' }}</td>
            <td>{{ $booking->flight ?? '' }}</td>
            <td>{{ $booking->type ?? '' }}</td>
            <td>{{ $booking->pax ?? '' }}</td>
            <td>{{ $booking->price ?? '' }}</td>
            <td>{{ $booking->currency->name ?? '' }}</td>
            <td>{{ $booking->info ?? '' }}</td>
                <td>
                    {!! Form::open(['route' => ['admin.bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admin.bookings.show', [$booking->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('admin.bookings.edit', [$booking->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
