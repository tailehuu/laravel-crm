<div id='cssmenu'>
	<ul>
		<li {{ (Request::is('*sale') ? 'class=active' : '') }}><a href="{{ url('sale') }}" data-drop="magazine">
                <i class="glyphicon glyphicon-cog"></i> &nbsp;Opportunity</a>
		</li>

		<li class='has-sub {{ (Request::is(' *value*') ? 'openactive' : '') }}'>
		    <a href='#' class="dropdown-toggle" data-drop="magazine"><i class="glyphicon glyphicon-th"></i> &nbsp;Value</a>
			<ul style="display: {{ (Request::is('*value*') ? 'block' : 'none') }}">
				<li>
                    <a href='/value/full'><span class="sub-menu"><i class="glyphicon glyphicon-align-justify"></i> &nbsp; Full Value</span></a>
                </li>
				<li>
                    <a href="/value/weighted" class="dropdown-toggle"><span class="sub-menu"><i class="glyphicon glyphicon-align-left"></i> &nbsp; Weighted Value</span></a>
                </li>
			</ul>
		</li>

	</ul>
</div>

