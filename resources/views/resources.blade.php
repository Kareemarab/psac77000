@extends('layouts.master')

@section('content')

<!-- Note: The "styleN" class below should match that of the header element. -->
<section id="banner" class="style2">
	<div class="inner">
		<span class="image">
			<img src="../c.jpg" alt="" />
		</span>
		<header class="major">
			<h1 style="color: #E63946">Resources</h1>
		</header>
		<div class="content">
			<h4 style="color: #fff">Useful links.</h4>
		</div>
	</div>
</section>

<!-- Main -->
<div id="main">
	<section id="one" style="background-color: #fff;">
		<div class="inner">
			<header class="major">
				<h1 style="color: #000;">Useful Resources</h1>
			</header>
			
			<a href="https://carleton.ca/career/"><h3>Career Services</h3></a>
			<p>Job search support, career and networking events</p>
			<a href="https://www.caut.ca/"><h3>Canadian Association of University Teachers</h3></a>
			<p>Advocacy for academic staff, including on academic freedom, social justice, and research integrity. CAUT publishes a series of useful briefs and reports, including the June 2018 Handbook for Negotiating Starting Salaries.</p>
			<a href="https://carleton.ca/isso/"><h3>International Student Services Centre</h3></a>
			<p>Information on UHIP health insurance and immigration resources. The ISSO offers its services to Postdoctoral Fellows, not just students.</p>
			<a href="https://carleton.ca/edc/"><h3>Educational Development Centre</h3></a>
			<p>Teaching resources and support</p>
			<a href="https://carleton.ca/health/"><h3>Health and Disability/Counseling</h3></a>
			<p>Medical clinic and counselling services</p>
			<a href="https://students.carleton.ca/services/sexual-assault-support-services/"><h3>Sexual Assault Support Services</h3></a>
			<p>Website offers comprehensive list of resources for information on and/or support for sexual violence</p>
		</div>
	</section>

</div>

@endsection