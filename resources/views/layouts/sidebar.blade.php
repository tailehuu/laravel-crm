<div id='cssmenu'>
	<ul>
		<li {{ (Request::is('*sale') ? 'class=active' : '') }} ><a
			href="{{ url('sale') }}"
			class=" glyphicon glyphicon-cog" data-drop="magazine">
				Opportunity </a>
		</li>

		<li class='has-sub {{ (Request::is(' *value*') ? 'openactive' : '') }}' >
		<a href='#' class="glyphicon glyphicon-th dropdown-toggle " data-drop="magazine">&nbspValue</a>
			<ul
				style="display: {{ (Request::is('*value*') ? 'block' : 'none') }}">
				<li><a href='/value/full'><span aria-hidden="true" class="glyphicon glyphicon-align-justify"></span><span class="sub-menu">&nbspFull Value</span></a></li>
				<li><a href="/value/weighted" class="dropdown-toggle"><span aria-hidden="true" class="glyphicon glyphicon-align-left"></span><span class="sub-menu">&nbspWeighted Value</span></a></li>
			</ul>
		</li>

	</ul>
</div>

