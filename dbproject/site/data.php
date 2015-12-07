<?php
	error_reporting(1);
	$db = new mysqli("localhost", "nsheela", "nsheela2015", "nsheela");

	if ($db->connect_errno) {
		echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
	}
?>

<html>
	<head>
		<title>CarPooling System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href=" assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" />
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#home" id="home"><span class="icon fa-home"></span> Home</a></li>
					<li><a href="#users" id="users">Users</a></li>
					<li><a href="#departments" id="departments">Departments</a></li>
					<li><a href="#car" id="car">Car </a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first" id="mainContent">

<!-- Work -->
<div class="wrapper style2" id="usersDiv">
	<article id="work">
		<header>
			<h2>User Management Page</h2>
			<p>Add users on this page</p>
		</header>
		<div class="container" id="mainContent">
			<div class="row">
				<div class="4u 12u(mobile)">
					<section class="box style1">
						<span class="icon featured fa-user-plus"></span>
						<h3><a href="#add_user" id="add_user">Add User</a></h3>
					</section>
				</div>
			</div>
		</div>
	</article>
</div>
<div class="wrapper">
<table id="userTable" class="display" cellspacing="0" width="60%" border="1">
        <thead>
            <tr>
                <th>UUID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone No</th>
                <th>Email<th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>UUID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone No</th>
                <th>Email<th>
            </tr>
        </tfoot>
        <tbody>

<?php
//Php will poluate each table row
$query = "SELECT *
FROM user_information";
$result = $db->query($query);
if($result) {
	while ($row = $result->fetch_assoc()) {
	
		echo"<tr>";
		echo"<td align=\"center\"> {$row['user_id']} </td>";
		echo"<td align=\"center\"> {$row['first_name']} </td>";
		echo"<td align=\"center\"> {$row['last_name']} </td>";
		echo"<td> {$row['contact_phoneno']} </td>";
		echo"<td align=\"center\"> {$row['contact_emailid']} </td>";
		echo"<td>";
		echo"</td>";
		echo"</tr>";
	 }
}
?>
  </tbody>
    </table>
    </div>
			</div>
		

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Have me make stuff for you.</h2>
						<p>Ornare nulla proin odio consequat sapien vestibulum ipsum sed lorem.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script>
			$(function() {
			
				$( '#home' ).click(function(e) {
					e.preventDefault()
					window.top.location.href = "index.html"; 
				});
			
				$( '#users' ).click(function(e) {
					e.preventDefault()
					window.top.location.href = "./data.php"; 
				});
				$( '#add_user' ).click(function(e) {
					e.preventDefault()
					window.top.location.href = "./test.html"; 
				});
				$( '#departments' ).click(function(e) {
					e.preventDefault()
					window.top.location.href = "./depatement.php"; 
				});
				$( '#car' ).click(function(e) {
					e.preventDefault()
					window.top.location.href = "./car.php"; 
				});

				$('#userTable').DataTable();

				
			});
			</script>

	</body>
</html>

    
</head>
</html>