<div class="type-34">
    <div class="banner owl-carousel owl-theme">
    @if(isset($banner))
        @foreach($banner as $value)
        <div class="item">
            <img src="{{ $value->banner_img }}">
        </div>
        @endforeach
    @endif
    </div>
</div>