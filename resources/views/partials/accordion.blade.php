<div class="container">
    <h1 class="text-center">Часто задаваемые вопросы</h1>
    <div id="accordion">
    @foreach($faqs as $item)
            <div class="card">
                <div class="card-header" id="heading{{$item->id}}">
                    <h5 class="mb-0">
                        <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                            {{$item->sort_order}}. {{$item->question}}
                        </button>
                    </h5>
                </div>

                <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        {{$item->answer}}
                    </div>
                </div>
            </div>
    @endforeach
    </div>
</div>
