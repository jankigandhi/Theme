<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" type="text/css" href="css/alert.css">
</head>
<body>
<div class="container">
	<h1>Alert</h1>
	<div class="py-3">
		<h3>Basic Alert</h3>
		<div class="alert alert-primary" role="alert">
			A simple primary alert—check it out!
		</div>
		<div class="alert alert-secondary" role="alert">
			A simple secondary alert—check it out!
		</div>
		<div class="alert alert-success" role="alert">
			A simple success alert—check it out!
		</div>
		<div class="alert alert-danger" role="alert">
			A simple danger alert—check it out!
		</div>
		<div class="alert alert-warning" role="alert">
			A simple warning alert—check it out!
		</div>
		<div class="alert alert-info" role="alert">
			A simple info alert—check it out!
		</div>
		<div class="alert alert-light" role="alert">
			A simple light alert—check it out!
		</div>
		<div class="alert alert-dark" role="alert">
			A simple dark alert—check it out!
		</div>
	</div>
	<div class="py-3">
		<h3>Style-2</h3>
		<div class="custom-alert alert-left-border alert alert-primary rounded-0  d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-thumb-up"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
			<button type="button" class="btn-close close" data-dismiss="alert" aria-hidden="true">×</button>
		</div>
		<div class="custom-alert alert-left-border alert alert-secondary rounded-0 d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-close"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-success rounded-0  d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-assignment-alert"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-danger rounded-0 p d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-alert-triangle"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-warning rounded-0  d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-notifications-add"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-info rounded-0 p-0 d-block">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-alert-circle"></i>
				<strong class="pl-2">Well done!</strong> You successfully read this important alert message.
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-light rounded-0 p- d-block p-0">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-alert-polygon"></i>
			<strong class="pl-2">Well done!</strong> You successfully read this important alert message.</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-dark rounded-0 p-0 d-block">
			<div class="alert-left-white-border p-3 d-block">
				<i class="zmdi zmdi-help-outline"></i>
			<strong class="pl-2">Well done!</strong> You successfully read this important alert message.</div>
		</div>
	</div>
	<div class="py-3">
		<h3>Basic Additional content</h3>
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Well done!</h4>
			<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
			<hr>
			<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
		</div>
	</div>
	<div class="py-3">
		<h3>Custom-alert</h3>
		<div class="custom-alert alert-left-border alert alert-warning rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-info rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-secondary rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-light rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-danger rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-dark rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold">Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
		<div class="custom-alert alert-left-border alert alert-success rounded-0 p-0 d-block">
			<div class="msgtitle  alert-left-white-border p-3 font-weight-bold"><i class="pr-3 zmdi zmdi-edit"></i>Fix the Following Errors:</div>
			<div class="alert-left-white-border d-block pl-3">
				<ul class="mb-0 py-4">
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, adipisci.</li>
					<li>Placeat, et hic pariatur fugiat autem earum facere necessitatibus fuga.</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>