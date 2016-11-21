<div class="type-45">
    <div id="page-heading">
    @if(isset($type_1))
        @foreach($type_1 as $value)
        <div style="background: url({{ $value->category_img }});background-size: cover;
             background-position: center top;
             width:100%; padding:100px; ">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text">
                        <h1 style="font-weight: 400;
                            /* margin: 15px; */
                            margin-top: 105px;
                            padding: 0px;
                            color: white;
                            ">{{ $value->category_title }}</h1>
                        <p style="color: rgba(97, 104, 115, 0.63);
                           font-size: 20px;
                           margin-top: -2px;
                           ">Starting at ${{ $value->price_rate }}</p>
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
    @endif
    </div>
</div>