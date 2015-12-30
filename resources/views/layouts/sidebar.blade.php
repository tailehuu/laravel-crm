<!-- <ul class="nav nav-sidebar">
    <li {{ (Request::is('*sale') ? 'class=active' : '') }} ><a href="{{ url('sale') }}">Full Value</a></li>
    <li {{ (Request::is('*weighted') ? 'class=active' : '') }}><a href="{{ url('weighted') }}">Weighted Value</a></li>
</ul> -->
<div id='cssmenu'>
<ul>
   <li {{ (Request::is('*sale') ? 'class=active' : '') }} ><a href="{{ url('sale') }}" class="dropdown-toggle" data-drop="magazine"> Opportunity </a></li>
   <li class='has-sub {{ (Request::is('*weighted') ? 'open active' : '') }}' ><a href='#'><span>Value</span></a>
      <ul style="display:{{ (Request::is('*weighted') ? 'block' : 'none') }}">
         <li><a href='/value/full'><span>Full Value</span></a>
         </li>
         <li><a href="/value/weighted"><span> Weighted Value</span></a>
            
         </li>
      </ul>
   </li>
  
</ul>
</div>

