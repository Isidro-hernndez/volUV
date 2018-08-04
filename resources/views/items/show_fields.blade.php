<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $item->id !!}</p>
</div>

<!-- Quantity Field -->
<div class="form-group">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{!! $item->quantity !!}</p>
</div>

<!-- Subtotal Field -->
<div class="form-group">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{!! $item->subtotal !!}</p>
</div>

<!-- Itemable Id Field -->
<div class="form-group">
    {!! Form::label('itemable_id', 'Itemable Id:') !!}
    <p>{!! $item->itemable_id !!}</p>
</div>

<!-- Itemable Type Field -->
<div class="form-group">
    {!! Form::label('itemable_type', 'Itemable Type:') !!}
    <p>{!! $item->itemable_type !!}</p>
</div>

<!-- Sell Id Field -->
<div class="form-group">
    {!! Form::label('sell_id', 'Sell Id:') !!}
    <p>{!! $item->sell_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $item->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $item->updated_at !!}</p>
</div>

