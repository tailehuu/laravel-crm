<div id='cssmenu'>
	<ul>
		<li {{ (Request::is('*sale') ? 'class=active' : '') }} ><a
			href="{{ url('sale') }}"
			class=" " data-drop="magazine"><i class="glyphicon glyphicon-cog"></i>
				Opportunity </a>
		</li>

		<li class='has-sub {{ (Request::is(' *value*') ? 'openactive' : '') }}' >
		<a href='#' class="dropdown-toggle" data-drop="magazine"><i class="glyphicon glyphicon-th"></i>&nbspValue</a>
			<ul
				style="display: {{ (Request::is('*value*') ? 'block' : 'none') }}">
				<li><a href='/value/full'><span class="sub-menu"><i class="glyphicon glyphicon-align-justify"></i>&nbspFull Value</a></span></li>
				<li><a href="/value/weighted" class="dropdown-toggle"><span class="sub-menu"><i class="glyphicon glyphicon-align-left"></i>&nbspWeighted Value</a></span></li>
			</ul>
		</li>

	</ul>
</div>

