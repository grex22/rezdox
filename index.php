
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RezDox Dashboard</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="dist/styles/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="hide-conditional-tooltips">


    <nav class="navbar-main navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <button type="button" id="navbarMainToggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          <div class="relative">
            <div class="notification">3</div>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </div>
        </button>
        <div class="navbar-header">
            <button type="button" id="navbarLeftToggle" class="navbar-toggle" data-target="#navbarLeft" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
						<img src="dist/images/rezdox-rev.png" alt="RezDox">
					</a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-fw fa-address-book-o"></i> My Pros <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Links</a></li>
									<li><a href="#">Links</a></li>
									<li><a href="#">Links</a></li>
									<li><a href="#">Links</a></li>
								</ul>
						</li>
						<li class="dropdown">
							<a href="#"><i class="fa fa-fw fa-certificate"></i> Shop </a>
						</li>
            <li class="dropdown">
							<a href="#" class="dropdown-toggle combolink-wrapper" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<div class="avatar default relative">GB<div class="notification">3</div></div>
								<div class="combolink">
									<span class="gray">Greg Burkett</span><br>
									My Account
								</div>
							</a>
								<ul class="dropdown-menu">
									<li><a href="#">Account Settings</a></li>
									<li><a href="#">Edit My Profile</a></li>
									<li class="divider"></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#">Help!</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="fa fa-sign-out pull-right"></i>Sign Out</a></li>
								</ul>
						</li>
          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>

		<div class="navbar navbar-inverse navbar-fixed-left" id="navbarLeft">
      <div id="shade"></div>
			<ul class="nav navbar-nav">
			 <li class="active"><a href="#"><i class="fa fa-fw fa-th-large" data-toggle="tooltip" data-container="body" data-placement="right" title="Dashboard"></i> <span class='linktext'>Dashboard</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-home" data-toggle="tooltip" data-container="body" data-placement="right" title="Residences"></i> <span class='linktext'>Residences</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-image" data-toggle="tooltip" data-container="body" data-placement="right" title="Home Inventory"></i> <span class='linktext'>Home Inventory</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-money" data-toggle="tooltip" data-container="body" data-placement="right" title="RezRewards"></i> <span class='linktext'>RezRewards</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-handshake-o" data-toggle="tooltip" data-container="body" data-placement="right" title="Connections"></i> <span class='linktext'>Connections</span> <span class="badge pull-right">123 <i class="fa fa-star"></i></span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-user-plus" data-toggle="tooltip" data-container="body" data-placement="right" title="Invite"></i> <span class='linktext'>Invite</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-thumbs-up" data-toggle="tooltip" data-container="body" data-placement="right" title="Reviews"></i><span class='linktext'>Reviews</span></a></li>
			 <li><a href="#"><i class="fa fa-fw fa-list" data-toggle="tooltip" data-container="body" data-placement="right" title="Directory"></i> <span class='linktext'>Directory</span></a></li>
			</ul>
		</div>

    <div class="container-fluid" id="main">

      <div class="starter-template">
        <h1>My Residences <i class="fa fa-angle-right"></i> Add a Residence</h1>
        <p class="lead">Lead paragraph lorem ipsum quantas sic transic gloria tra tric san phille yul redis bullta.</p>

					<button class="btn btn-action">
						<div class="btn-icon"><i class="fa fa-plus"></i></div>
						Sample Action Button
					</button>
				<br>
				<br>
      </div>

			<div class="panel panel-default softshadow">
				<div class="panel-body">
					<div class="flex-row">
						<div class="property-info">
							<div class="media">
								<div class="media-left">
									<img src="dist/images/house.jpg" class="media-object">
								</div>
								<div class="media-body">
									<h3 class="media-heading"><a href="#">Taylor Primary Residence</a></h3>
									<div class="info-item">
										<i class="fa fa-map-marker fa-fw"></i>
									 114 N Columbia Street, Warsaw, IN
									</div>
									<div class="info-item">
										<i class="fa fa-info-circle fa-fw"></i>
									 3 Bed, 2.5 Bath, 1200 sqft
									</div>
								</div>
							</div>

						</div>
						<div class="value text-center">
								<h3 class="bold">$767,802</h3>
								Real Market Value <a tabindex="0" role="button" data-trigger="focus" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus."><i class="green fa fa-info-circle"></i></a><br>
								<span class="red small"><em>Last Updated 1/24/18</em></span>
						</div>
						<div class="quicklinks hidden-sm hidden-xs">
							<h5>Quick Links</h5>
							<div class="row">
								<div class="col-xs-6">
									<ul class="list-unstyled">
										<li><a href="#">Settings</a></li>
										<li><a href="#">Home Information</a></li>
										<li><a href="#">Home History</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul class="list-unstyled">
										<li><a href="#">Photo Gallery</a></li>
										<li><a href="#">Expenses</a></li>
										<li><a href="#">RezReport</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">

					<h1>Typography</h1>

					<h1>Heading One</h1>
					<h2>Heading Two</h2>
					<h3>Heading Three</h3>
					<h4>Heading Four</h4>
					<h5>Heading Five</h5>
					<h6>Heading Six</h6>
					<hr>

					<h1>Data table example</h1>
          <div class=" table-responsive">


					<table class="table table-striped table-condensed" data-toggle="table" data-pagination="true" data-search="true" data-page-size="3">
						<thead>
							<tr>
									<th></th>
									<th data-sortable="true">Date</th>
									<th>Test Img</th>
									<th data-sortable="true">Project</th>
									<th data-sortable="true">Service Provider</th>
									<th data-sortable="true" data-align="right">Project Value</th>
									<th data-align="right">Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php for($i=1;$i<25;$i++): ?>
						<tr>
							<td><i class='fa fa-image'></i></td>
							<td>Dec <?php echo rand(1,31); ?>, 2017</td>
							<td><a href="http://unsplash.it/600x480" data-fancybox data-caption="My caption"><img src="http://unsplash.it/60x60" class="img-thumbnail"></a></td>
							<td><a href="#"><strong>Living Room Blinds</strong></a></td>
							<td><a href="#"><strong>3-Day Blinds</strong></a><br>(303) 319-3313</td>
							<td>$1,<?php echo rand(100,999); ?></td>
							<td>
								<div class="btn-group pull-right">
									<button type="button" class="btn btn-inverse btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#">View</a></li>
										<li><a href="#">Share</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
							</td>
						</tr>
						<?php endfor; ?>


						</tbody>
				</table>

        </div>

					<hr>

					<h1>Form Sample &raquo; Add Business</h1>

					<form>

              <div class="row">
                <div class="col-md-9">

                  <fieldset class="form-group">
                    <label for="business_name">Business Name <span class="req">*</span></label>
                    <input type="text" class="form-control mb10" id="business_name" required="true">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="business_address">Business Address <span class="req">*</span></label>
        					</fieldset>

                  <fieldset class="form-group form-group-nested">
                    <div class="checkbox checkbox-fancy mb20">
          						<input type="checkbox" id="business_address_use_user">
          						<label for="business_address_use_user">Use my user address as the business address</label>
          					</div>
                    <label class="sublabel">Address Line 1 <span class="req">*</span></label>
                    <input type="text" class="form-control mb10" id="business_address" required="true">
                    <label class="sublabel">Address Line 2 <span class="req">*</span></label>
                    <input type="text" class="form-control mb10" id="business_address_2" required="true">
                    <div class="row">
                      <div class="col-sm-6">
                        <label class="sublabel">City <span class="req">*</span></label>
                        <input type="text" class="form-control mb10" id="business_city" required="true">
                      </div>
                      <div class="col-sm-6">
                        <label class="sublabel">State / Province <span class="req">*</span></label>
                        <select class="form-control" id="business_state" required="true">
                          <option value="AL">Alabama</option>
                        </select>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Phone <span class="req">*</span></label>
                        <input type="text" class="form-control mb10" id="business_phone">

                      </div>
                      <div class="col-sm-6">
                        <label>Business Email <span class="req">*</span></label>
                        <input type="email" class="form-control mb10" value="member@youremail.com" id="business_email" required="true">
                        <small class="help-block">We'll never share your email with anyone else.</small>
                      </div>
                    </div>
                  </fieldset>

                  <fieldset class="form-group">
                    <label>Website</label>
                    <input type="text" class="form-control mb10" id="business_website">
                  </fieldset>

                  <fieldset class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Business Category <span class="req">*</span></label>
                        <select class="form-control mb10" id="business_cat" required="true">
                          <option value="Real Estate">Real Estate</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label>Subcategory <span class="req">*</span></label>
                        <select class="form-control" id="business_subcat" required="true">
                          <option value="AL">Agent</option>
                        </select>
                      </div>
                    </div>
                  </fieldset>

        					<fieldset class="form-group">
                    <label>Radio Button Demo</label>
          					<div class="radio radio-fancy">
          						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          						<label for="optionsRadios1">
          							Option one is this simply demoing the radio button style
          						</label>
          					</div>
          					<div class="radio radio-fancy">
          						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          						<label for="optionsRadios2">
          							Option two can be something else and selecting it will deselect option one
          						</label>
          					</div>
        					</fieldset>
                  <fieldset class="form-group">
        						<label for="exampleInputFile">Business Logo</label>
        						<input type="file" class="form-control-file" id="business_logo">
        						<small class="help-block">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        					</fieldset>

                  <button type="submit" class="btn btn-primary">Submit</button>

                  <hr>

                  <h4>Other Button Styles</h4>
                  <button type="submit" class="btn btn-inverse">Inverse</button>
        					<button type="submit" class="btn">Default Action</button>

                </div>
              </div>

          </form>


				</form>

				</div>
			</div>

    </div><!-- /.container -->



		<footer>
      <script type="text/javascript">
      function mobileSetClasses(){
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        if( w <= 767){
          document.getElementById("navbarLeft").classList.add("closed");
          document.getElementById("main").classList.add("navLeftClosed");
          document.body.classList.remove("hide-conditional-tooltips");
        }
      }
      mobileSetClasses();
      </script>
			<img src="dist/images/rezdox-gray.png" alt="RezDox">
		</footer>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/scripts/jquery.js"></script>
    <script src="dist/scripts/main.js"></script>
  </body>
</html>
