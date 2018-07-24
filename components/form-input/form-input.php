<?php include_once '../../inc/head.php';?>
<link rel="stylesheet" href="../typography/css/typography.css">
<link rel="stylesheet" href="../Buttons/css/button.css">
<link rel="stylesheet" type="text/css" href="css/form-input.css">
</head>
<body>
<?php $HederClass="bg-dark";?>
<?php include_once '../nav-bar/nav-bar.php';?>
<div class="container my-4">
	<h1 class="h2 text-center mt-3">Form Inputs</h1>
	<div class="p-4">
		<h4 class="mb-3">Input box</h4>
		<div class="row my-4 mx-0">
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-effect mb-3">
					<input class="effect border-primary" type="text" required />
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-effect mb-3">
					<input class="effect effect-2 border-danger" type="text" required />
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-effect mb-3">
					<input class="effect effect-3 border-success" type="text" required />
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="form-group mb-0">
					<input type="email" class="square-box form-control" placeholder="EMAIL ADDRESS" />
				</div>
			</div>
		</div>
		<div class="mb-4">
			<h4>Inline</h4>
			<div class="row mb-3 mx-0">
				<div class="col-sm-6">
					<div class="form-group mb-0">
						<input type="email" class="square-box form-control" placeholder="EMAIL ADDRESS" />
					</div>
				</div>
				<div class="col-sm-6">
					<button class="btn-thick btn-block rounded-0 btn btn-primary">Sign up</button>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4 class="mb-3">Textarea</h4>
		<div class="row my-4 mx-0">
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-area input-effect mb-3">
					<textarea class="effect border-primary" required /></textarea>
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-area input-effect mb-3">
					<textarea class="effect effect-2 border-danger" required /></textarea>
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 mb-3">
				<div class="input-area input-effect mb-3">
					<textarea class="effect effect-3 border-success" required /></textarea>
					<label>First Name</label>
					<span class="focus-border"></span>
				</div>
			</div>
			<div class="col-md-12 col-sm-6 mb-3">
				<div class="input-area input-effect mb-3">
					<textarea class="square-box form-control" placeholder="WRITE HERE..."></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4>Select box</h4>
		<div class="row">
			<div class="col-md-6">
				<div class="col-12">
					<h4>Default Selectbox</h4>
					<div class="form-group">
						<label>Select option</label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				<div class="col-12">
					<h4>Square Selectbox</h4>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="square-box form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
				</div>
				<div class="col-12">
					<h4>Square Selectbox Primary</h4>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="square-box border-primary bg-transparent form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
				</div>
				<div class="col-12">
					<h4>Square Selectbox Success</h4>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="square-box border-success bg-transparent form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-12">
					<h4>Selectbox</h4>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="select-box-with-bottom-border square-box border-primary form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="select-box-with-bottom-border square-box border-danger form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
					<div class="form-group">
						<label>Select option</label>
						<div class="selectbox">
							<select class="select-box-with-bottom-border square-box border-success form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<span class="select-icon ti-angle-down"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4>Dropdown menu</h4>
		<div class="row">
			<div class="col-md-4 py-2">
				<div class="drodown-menu">
					<button class="toggle-btn btn btn-outline-secondary btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon zmdi zmdi-caret-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="#"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="#"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="#"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 py-2">
				<div class="drodown-menu">
					<button class="toggle-btn btn btn-outline-secondary btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon ti-angle-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="#"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="#"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="#"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 py-2">
				<div class="drodown-menu">
					<button class="square-box toggle-btn btn btn-outline-secondary btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon ti-angle-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="#"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="#"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="#"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 py-2">
				<div class="drodown-menu border-primary">
					<button class="toggle-btn btn square-box bg-transparent btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon ti-angle-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="/"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="/"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="/"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 py-2">
				<div class="drodown-menu border-success">
					<button class="toggle-btn btn square-box bg-transparent btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon ti-angle-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="/"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="/"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="/"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 py-2">
				<div class="drodown-menu border-danger">
					<button class="toggle-btn btn square-box bg-transparent btn-block text-left">
					<span>Select Options</span>
					<i class="toggle-icon ti-angle-down"></i>
					</button>
					<ul class="drodown-option list-unstyled mb-0">
						<li>
							<a href="/"><span class="ti-user"></span>Option1</a>
						</li>
						<li>
							<a href="/"><span class="ti-settings"></span>Option2</a>
						</li>
						<li>
							<a href="/"><span class="ti-close"></span>Option1</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</div>
	<div class="p-4">
		<h4 class="mb-3">Default Checkbox</h4>
		<div class="row">
			<div class="col-md-4 col-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck1">
					<label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-4 col-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="customCheck2">
					<label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4 class="mb-3">Checkbox</h4>
		<div class="row">
			<div class="col-md-3 col-6">
				<div class="pretty-input check-success">
					<input type="checkbox" name="checkbox" id="test1" />
					<label for="test1">Apple</label>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="pretty-input check-primary">
					<input type="checkbox" name="checkbox" id="test2" />
					<label for="test2">Apple</label>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="pretty-input check-danger">
					<input type="checkbox" name="checkbox" id="test3" />
					<label for="test3">Apple</label>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="pretty-input check-info">
					<input type="checkbox" name="checkbox" id="test4" />
					<label for="test4">Apple</label>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="pretty-input check-dark">
					<input type="checkbox" name="checkbox" id="test5" />
					<label for="test5">Apple</label>
				</div>
			</div>
			<div class="col-md-3 col-6">
				<div class="pretty-input check-warning">
					<input type="checkbox" name="checkbox" id="test6" />
					<label for="test6">Apple</label>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4 class="mb-3">Default Radios</h4>
		<div class="row">
			<div class="col-md-4 col-6">
				<div class="custom-control custom-radio">
					<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
				</div>
			</div>
			<div class="col-md-4 col-6">
				<div class="custom-control custom-radio">
					<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4 class="mb-3">Radios</h4>
		<div class="row">
			<div class="col-md-4 col-6">
				<div class="pretty-input check-primary">
					<input type="radio" id="radio1" name="radio" />
					<label class="circle-input" for="radio1">Apple</label>
				</div>
			</div>
			<div class="col-md-4 col-6">
				<div class="pretty-input check-danger">
					<input type="radio" id="radio2" name="radio" />
					<label class="circle-input radio-fill" for="radio2">Apple</label>
				</div>
			</div>
			<div class="col-md-4 col-6">
				<div class="pretty-input check-success">
					<input type="radio" id="radio3" name="radio" />
					<label class="circle-input radio-fill" for="radio3">
						<span class="radio-check"></span>
						Apple
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4>Switch</h4>
		<div class="row">
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-primary">
					<input type="checkbox" name="checkbox8" id="checkbox8" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-danger">
					<input type="checkbox" name="checkbox9" id="checkbox9" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-success">
					<input type="checkbox" name="checkbox10" id="checkbox10" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-dark">
					<input type="checkbox" name="checkbox11" id="checkbox11" />
					<span class="slider"></span>
				</label>
			</div>
		</div>
	</div>
	<div class="p-4">
		<h4>Switch toggle</h4>
		<div class="row">
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-primary">
					<input type="radio" name="radio" id="radio8" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-danger">
					<input type="radio" name="radio" id="radio9" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-success">
					<input type="radio" name="radio" id="radio10" />
					<span class="slider"></span>
				</label>
			</div>
			<div class="col-md-3 col-6 mb-2">
				<label class="toggle mb-0 align-middle toggle-dark">
					<input type="radio" name="radio" id="radio11" />
					<span class="slider"></span>
				</label>
			</div>
		</div>
	</div>
</div>
<?php include_once '../../inc/footer.php';?>
</body>
</html>
