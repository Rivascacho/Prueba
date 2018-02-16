<nav class="navbar navbar-default">

	<div class="container-fluid">

		<!-- BRAND -->
		<div class="navbar-header">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment-example" aria-expanded="false">

                <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>            

			</button>

			<!-- Branding Image -->
			<a class="navbar-brand" href="{{ url('/') }}">

				HELPDESK

			</a>

		</div>

		<!-- COLLAPSIBLE NAVBAR -->
		<div class="collapse navbar-collapse" id="alignment-example">

			<!-- Links -->
			<ul class="nav navbar-nav">

				&nbsp;

			</ul>                        

			<!-- Link (right) -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
				@guest

					<li>

						<a href="{{ route('login') }}">Login</a>

					</li>

					<li>

						<a href="{{ route('register') }}">Registrarse</a>

					</li>

				@else
					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">

							{{ Auth::user()->name }} <span class="caret"></span>

						</a>

						<ul class="dropdown-menu">

							<li>

								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

									Logout

								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

									{{ csrf_field() }}

								</form>

							</li>

						</ul>

					</li>

				@endguest

			</ul>

		</div>

	</div>

</nav>