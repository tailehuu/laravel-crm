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
				<li><a href='/value/full'><i class="glyphicon glyphicon-align-justify"></i><span class="sub-menu">Full Value</span></a></li>
				<li><a href="/value/weighted" class="dropdown-toggle"><i class="glyphicon glyphicon-align-left"></i><span class="sub-menu">&nbspWeighted Value</span></a></li>
			</ul>
		</li>

	</ul>
</div>

