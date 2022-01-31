<section>
    <div class="container">
        @foreach (config('bluebar') as $item)
        <div class="item">
            <div class="little-img">
                <a href=""><img src="{{$item['img']}}" alt="{{ $item['alt']}}"></a>
            </div>
            <div class="img-text">
               <a href="">{{ $item['text']}}</a> 
            </div>
        </div>
        @endforeach
    </div>
</section>