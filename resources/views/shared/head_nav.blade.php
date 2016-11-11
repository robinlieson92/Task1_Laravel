<div class="navbar navbar-default">
	<div class="navbar-header">
       	{!! link_to(route('.home'),"Training Bootstrap", ["class"=>"navbar-brand"]) !!}
        
    </div>
    <ul class="nav navbar-nav navbar-right">
			<li>{!! link_to(route('.home'),"Home") !!}</li>
			<li>{!! link_to(route('.profile'),"Profile") !!}</li>
			<li>{!! link_to(route('.contact'),"Contact") !!}</li>
			</ul>
</div>
