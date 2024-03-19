
<div class='d-flex'>
    @foreach ($images as $item)
        <div class="card" style="width:15rem;margin-left:1.5rem;border:none">
            <img class="card-img-top" src="{{$item['image']}}" alt="Card image cap" style="width:200px; height:200px; object-fit: cover;border:none">
            <div class="card-body">
                <h6>{{$item['name']}}</h6>
                <div class=d-flex>
                    <p class="card-text">{{$item['price']}} | </p>
                    <p class="card-text">{{$item['discount']}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
