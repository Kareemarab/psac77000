@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main">
	<section id="one" style="background-color: #fff;">
		<div class="inner">
			<header class="major">
				<h1 style="color: #000;">About Us</h1>
			</header>
			<!-- Content -->
			<p style="color: #000;">PSAC local 77000, otherwise known as the Carleton University Postdoctoral Union (CUPU),
			represents Postdoctoral Fellows whose internal funding is equal or greater than 50% of the minimum annual salary
			stipulated in the collective agreement, or its pro-rated equivalent.<br>
			We are Postdocs like you who work to uphold and improve our working conditions.<br><br>
			The work of the local is done through an <a href="{{ url('/contactus') }}">Executive Committee</a> made up of
			peers which we elect at general membership meetings.<br><br>
			Our local <a href="../docs/PDF_A.pdf">bylaws</a> help to guide how the local functions. We, the members,
			also vote to adopt and amend the bylaws.<br><br>
			Our work contract, also called the <a href="../docs/PDF_CA.pdf">Collective Agreement</a> is a legally-binding
			contract. We negotiate it with the employer on a cyclical basis. We get to vote to accept, or not to accept,
			the contract which the parties present us with (visit the <a href="{{ url('/collective') }}">Collective Bargaining</a>
			tab for more information). The collective agreement stipulates our rights and responsibilities as employees, as well
			as the rights and responsibilities of our employer towards us.
			</p>
			<div class="row">
				<div class="6u 12u$(small)">
					<h3 style="color: #E63946;"><a href="../docs/PDF_A.pdf">Local Bylaws</a></h3>
				</div>
				<div class="6u$ 12u$(small)">
					<h3 style="color: #E63946;"><a href="../docs/PDF_CA.pdf">Collective Agreement</a></h3>
				</div>
			</div>
			<p style="color: #000;">We are a directly chartered local of the Public Service Alliance of Canada (PSAC), a union which represents more than 180,000 workers across Canada in every province and territory, with members in the federal government departments and agencies, community services agencies, Aboriginal communities, and many other sectors. PSAC also represents over 18,500 academic sector workers, and the greatest number of Postdoctoral Fellows (including but not limited to those working at Queen’s, McGill, Ecole Polytechnique, Dalhousie, Western, Memorial, and the University of Saskatchewan).<br><br>

			<a href="https://www.youtube.com/watch?v=R1pT_Ho1bwA">Learn more about the PSAC</a><br><br>

			Visit our national website: <a href="http://psacunion.ca/">psacunion.ca</a><br><br>

			Visit our regional website: <a href="http://psac-ncr.com/">psac-ncr.com</a><br><br>
			</p>
		</div>
	</section>

</div>

@endsection