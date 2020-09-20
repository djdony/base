<!-- where_togo_area_start  -->
<div class="where_togo_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="form_area">
                    <h3>Куда едем?</h3>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="search_wrap">
                    {!! Form::open(['url' => 'foo/bar', 'class'=>'search_form']) !!}
                    @isset($locations)
                        {!! Form::select('from', $locations, null, ['placeholder' => 'Откуда', 'class' => 'input_field']) !!}
                        {!! Form::select('from', $locations, null, ['placeholder' => 'Куда', 'class' => 'input_field']) !!}
                    @endisset
                    <div class="input_field">
                        <input id="datepicker" placeholder="Дата">
                    </div>
                    <div class="search_btn">
                        <button class="boxed-btn4 " type="submit" >Поиск</button>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
<!-- where_togo_area_end  -->

