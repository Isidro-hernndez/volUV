<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Itemable Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('itemable_id', 'Itemable Id:') !!}
    {!! Form::number('itemable_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Itemable Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('itemable_type', 'Itemable Type:') !!}
    {!! Form::text('itemable_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Sell Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sell_id', 'Sell Id:') !!}
    {!! Form::number('sell_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('items.index') !!}" class="btn btn-default">Cancel</a>
</div>
