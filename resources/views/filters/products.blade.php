<div class="field" id="{{$id}}">
    <label class="label">{{$title}}</label>
    <div class="field-wrapper-small">
    @foreach($value as $item)
        <label class="checkbox"><input type="checkbox" id="{{$item->value}}">{{$item->value}}</label>
    @endforeach
    </div>
    <div class="field-view-more is-size-7 has-text-info">Показать еще</div>
</div>