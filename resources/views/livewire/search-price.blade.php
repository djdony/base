<div>
    <ul>
        @foreach($cars as $car)
            <li>
                {{$car->name}}
            </li>
        @endforeach
    </ul>
</div>
