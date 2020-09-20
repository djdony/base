@extends('layouts.default')
@section('head')
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
    @include('partials.header')
    @include('partials.accordion')
    <hr />
    @include('partials.footer')
@endsection

@section('scripts')
    <script src="{{ mix('js/main.js') }}"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
    </script>
@endsection
