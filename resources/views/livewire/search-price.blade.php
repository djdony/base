<div>
    @if ($this->show())
        <div class="container pt-2">
            @foreach($cars as $car)
                <div class="card-group">
                    <div class="card">
                        @foreach($car->images as $image)
                            <img class="card-img-top" src="{{ asset('images/thumbs/'.$car->images->first()->url ?? '') }}" alt="Card image cap">
                        @endforeach
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center">{{$car->name}}</h1>
                            <div class="text-center">
                                <i class="fas fa-users"></i>
                                <span>{{$car->max_pax}}</span> |
                                <i class="fas fa-suitcase-rolling"></i>
                                <span>{{$car->max_luggage}}</span>
                            </div>
                            <p class="card-text">{{$car->description}}</p>
                            <p class="card-text"><small class="text-muted">{{$car->carType->name}}</small></p>
                        </div>
                    </div>

                    <div class="card d-flex align-items-center">
                        <div class="card-body d-flex align-items-center">
                            <form method="POST" action="#" class="">
                                    <button type="button btn-lg" class="btn btn-success">
                                        Заказать!
                                    </button>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    @endif

</div>
