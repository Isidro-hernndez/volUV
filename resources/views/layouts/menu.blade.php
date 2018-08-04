<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('dinners*') ? 'active' : '' }}">
    <a href="{!! route('dinners.index') !!}"><i class="fa fa-edit"></i><span>Dinners</span></a>
</li>

<li class="{{ Request::is('costumers*') ? 'active' : '' }}">
    <a href="{!! route('costumers.index') !!}"><i class="fa fa-edit"></i><span>Costumers</span></a>
</li>

<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{!! route('menus.index') !!}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('expenses*') ? 'active' : '' }}">
    <a href="{!! route('expenses.index') !!}"><i class="fa fa-edit"></i><span>Expenses</span></a>
</li>

<li class="{{ Request::is('sells*') ? 'active' : '' }}">
    <a href="{!! route('sells.index') !!}"><i class="fa fa-edit"></i><span>Sells</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{!! route('items.index') !!}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>
