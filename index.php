<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Utility Prototype</title>
	<link href="css/main.css" type="text/css" rel="stylesheet" media="all" />
</head>

<body>
	
	<div class="ncstate-utility-bar" aria-label="NC State Brand Utility Bar">
		
		<div class="ncstate-utility-bar-tools">
			<div class="ncstate-utility-bar-wrapper ncstate-utility-bar-wrapper-primary" id="ncstate-utility-bar-wrapper-primary">
			
				<div class="ncstate-utility-bar-home">
					<a href="http://www.ncsu.edu">NC State Home</a>
				</div>

				<div class="ncstate-utility-bar-options">

					<div class="ncstate-utility-bar-toggle">
						<a id="ncstate-utility-bar-toggle-link" href="#">Show/Hide Quicklinks</a>
					</div>
				
					<div class="ncstate-utility-bar-search" role="search" aria-label="Search www.ncsu.edu">
						
						<form action="http://www.ncsu.edu/search" name="navsearchform" class="ncstate-utility-bar-search-form">
	        
							<input id="navcx" name="cx" type="hidden" value="' + _ub.googleCustomSearchCode + '">
						    <input id="navcof" name="cof" type="hidden" value="FORID:11">
						    
							<input class="ncstate-utility-bar-search-field" id="search-input" name="q" type="search"
								placeholder="search ncsu.edu" aria-label="search ncsu.edu">
						 	<input type="submit" id="search-submit" name="search-submit" value="search"
								class="ncstate-utility-bar-search-submit">
				
						</form>
						
					</div>
					
				</div><!-- end options -->
		
			</div><!-- end util wrapper -->
		</div><!-- end tools -->
		
		<div class="ncstate-utility-bar-links is-hidden">
		
			<div class="ncstate-utility-bar-wrapper">
				
				<ul class="ncstate-utility-bar-primary-util">
					<li class="ncstate-utility-bar-primary-util ncstate-utility-bar-directory"><a href="http://www.ncsu.edu/directory/" id="ncstate-utility-bar-first-link">Campus Directory</a></li>
					<li class="ncstate-utility-bar-primary-util ncstate-utility-bar-mypack"><a href="http://mypack.ncsu.edu/">MyPack Portal</a></li>
					<li class="ncstate-utility-bar-primary-util ncstate-utility-bar-map"><a href="http://www.ncsu.edu/campus_map/">Campus Map</a></li>
					<li class="ncstate-utility-bar-primary-util ncstate-utility-bar-calendar"><a href="http://www.ncsu.edu/calendar/">Calendar</a></li>
				</ul>
				
				<div class="ncstate-utility-bar-sec-util">	
					<dl>
						<dt>Campus Resources</dt>
						<dd>
							<ul>
								<li><a href="http://housing.ncsu.edu/">University Housing</a></li>
								<li><a href="http://www.ncsudining.com/">University Dining</a></li>
								<li><a href="http://shop.bookstore.ncsu.edu/">Bookstores</a></li>
								<li><a href="http://ncsu.transloc.com/">Wolfline Buses</a></li>
								<li><a href="http://www.lib.ncsu.edu/">Libraries</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>Academic Resources</dt>
						<dd>
							<ul>
								<li><a href="http://admissions.ncsu.edu/">Undergraduate Admissions</a></li>
								<li><a href="http://www.ncsu.edu/academics/departments-a-z/">Academic Departments</a></li>
								<li><a href="https://wolfware.ncsu.edu/">WolfWare</a></li>
								<li><a href="http://oia.ncsu.edu/">International Affairs</a></li>
								<li><a href="http://distance.ncsu.edu/">Distance Education</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>Other Resources</dt>
						<dd>
							<ul>
								<li><a href="http://www.fis.ncsu.edu/cashier/">Cashier's Office</a></li>
								<li><a href="http://www.ncsu.edu/registrar/">Registration and Records</a></li>
								<li><a href="http://www7.acs.ncsu.edu/financial_aid/">Financial Aid and Scholarships</a></li>
								<li><a href="http://www.ncsu.edu/outreach/">Outreach and Engagement</a></li>
								<li><a href="http://help.ncsu.edu/">NC State Help Desk</a></li>
							</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>&nbsp;</dt>
						<dd>
							<ul>
								<li><a href="http://giving.ncsu.edu/">Giving</a></li>
								<li><a href="http://news.ncsu.edu/">NC State News</a></li>
								<li><a href="http://www.ncsu.edu/grad/">Graduate School</a></li>
								<li><a href="http://gmail.ncsu.edu/">Gmail Access</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				
			</div>
			
		</div>
	
	</div><!-- end util -->
	
	<script src="js/main.js"></script>
	
</body>
</html>