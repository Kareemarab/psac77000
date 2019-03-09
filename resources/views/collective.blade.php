@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main">
	<section id="one" style="background-color: #fff;">
		<div class="inner">
			<header class="major">
				<h1 style="color: #000;">Collective Bargaining</h1>
			</header>
			<!-- Content -->
			<p style="color: #000;">Collective bargaining is the process through which we negotiate our contract, also known as our <a href="/storage/docs/PDF_A.pdf">collective agreement</a>. Our contract expires every few years. When the contract expires, we have an opportunity to negotiate with our employer to better our working conditions. This is what we call the collective bargaining process, and we enter into bargaining on a cyclical basis.<br>
			Our local is currently beginning a new round of collective bargaining to improve our contract.<br>
			We have submitted input to our union as to how we would like to see our working conditions improved. We have also selected members of our local to represent us on our bargaining team.<br>
			We have recently submitted our notice to bargain to the employer, triggering the process through which our <a href="{{ url('/contactus') }}">bargaining</a> will enter into negotiations. Negotiations are done over the course of several meetings. The process may take several weeks to several months. <br>
			It is important to stay informed about our negotiations. To this end, visit this website regularly, and <a href="{{ url('/contactus') }}">contact us </a> to provide us with your personal email address for email updates. We cannot use the employer’s server to communicate strategic information with you. Furthermore, keep an eye out for membership meetings and sessions on collective bargaining in the workplace and visit the <a href="{{ url('/') }}">News & Events</a> page regularly.<br>

			<span class="image fit"><img src="/storage/images/PDF_C.pdf" alt="" /></span>
		</div>
	</section>

</div>

@endsection