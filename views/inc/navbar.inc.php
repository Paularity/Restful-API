<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#341E40;">
	<a class="navbar-brand" href="#">
    <img src="/images/logo-conlido.png" width="90" height="25" class="d-inline-block align-top" alt="">
		RESTful WebService
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto" style="cursor:pointer">
      <li class="nav-item">
        <span class="nav-link" href="#"><span class="item" onclick="load( '#content', 'home' )"><?= "HOME" ?></span></span>
      </li>
			<li class="nav-item" >
				<span class="nav-link" href="#"><span class="item" onclick="load( '#content', 'products' )"><?= "PRODUCTS" ?></span></span>
			</li>
			<li class="nav-item">
				<span class="nav-link" href="#"><span class="item" onclick="load( '#content', 'employees' )"><?= "EMPLOYEES" ?></span></span>
			</li>
			<li class="nav-item">
				<span class="nav-link" href="#"><span class="item" onclick="load( '#content', 'api' )"><?= "RESTful API" ?></span></span>
			</li>
    </ul>
  </div>
</nav>
