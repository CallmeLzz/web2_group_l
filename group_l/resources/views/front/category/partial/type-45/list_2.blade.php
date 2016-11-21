<div class="type_45">
    <div class="container">
    @if(isset($type_2))
        @foreach($type_2 as $value)
        <div class="row">
            <div class="col-md-6">
                <div class="word3">
                    <p style="margin-top:30px;"> {{ $value->category_title }} 
                        <br>voluntate liceret: sese habere. Quis aute iure reprehenderit in voluptate 
                        <br>velit esse. Ab illo tempore, ab est sed immemorabili. Quam temere in 
                        <br>vitiis legem.</p>
                    <h3>Curabitur blandit tempus ardua</h3>
                    <p> {{ $value->category_content }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="images">
                        <img src="{{ $value->category_img }}" style="width: 50%;" >
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    </div>
</div>