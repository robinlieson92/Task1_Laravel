<div class="navbar navbar-default">
 <div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
       	{!! link_to(route('.home'),"Training Bootstrap", ["class"=>"navbar-brand"]) !!}
        
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
	    <ul class="nav navbar-nav navbar-right">
			<li>{!! link_to(route('.home'),"Home") !!}</li>
			<li>{!! link_to(route('.profile'),"Profile") !!}</li>
			<li>{!! link_to(route('.contact'),"Contact") !!}</li>
		</ul>
	</div>
 </div>
</div>
