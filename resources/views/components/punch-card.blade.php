<div class="media box">
    <figure class="media-left">
        <div class="image is-128x128">
            <img class="card-image" src="{{ $pic }}">
        </div>
    </figure>
    <div class="media-content">
        <div class="content">
            <div class="has-text-weight-bold is-size-5">{{$name}}</div>
            <div>{{implode(', ', $products)}}</div>
            <div class="columns">
                <div class="column">
                    <span class="has-text-weight-bold">Заказ № {{$orderNum}}/{{$year}}</span>
                    <br> Материал: {{implode(', ', $materials)}}
                    <br> Машина: {{implode(', ', $machines)}}
                </div>
                <div class="column">
                    <span class="has-text-weight-bold">Размеры изделия</span>
                    <br>Длина, мм: {{$sizeLength}}
                    <br>Ширина, мм: {{$sizeWidth}}
                    <br>Высота, мм: {{$sizeHeight}}
                </div>
                <div class="column">
                    <span class="has-text-weight-bold">Размер по ножам</span>
                    <br>Длина, мм: {{$knifeSizeLength}}
                    <br>Ширина, мм: {{$knifeSizeWidth}}
                </div>
            </div>                        
        </div>
    </div>
    <div class="media-right">
        <button class="button is-small">Редактировать</button>
    </div>
</div>