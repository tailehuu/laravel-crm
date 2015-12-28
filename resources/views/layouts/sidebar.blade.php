<ul class="nav nav-sidebar">
    <li {{ (Request::is('*sale') ? 'class=active' : '') }} ><a href="{{ url('sale') }}">Full Value</a></li>
    <li {{ (Request::is('*weighted') ? 'class=active' : '') }}><a href="{{ url('weighted') }}">Weighted Value</a></li>
</ul>
