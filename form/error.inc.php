<link rel="stylesheet" href="css/mystyle.css">


    <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-info ">
        <a class="navbar-brand" href="#">Kathy's Cakes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order.html">Order Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
              
            </ul>
        </div>
    </nav>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="form.php" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="form.php" onClick="history.go(-1)">Back to form</a></strong></p>
