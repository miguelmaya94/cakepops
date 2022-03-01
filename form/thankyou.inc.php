<style>
body {
  margin: 0;
  left:0;
  font-family: 'Raleway', sans-serif;
}
.topnav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  width: 100%;
  top:0;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: green;
}
.topnav a.active {
  background-color: skyblue;
  color: white;
}

.topnav .icon {
  display: none;
}
.contain{
  text-align: center;
  margin-top: 100px;

}
footer {
text-align: center;
padding: 3px;
background-color: Skyblue;
color: white;
  bottom: 0;
  position: fixed;
  width: 100%;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display:none;}
  .topnav a.icon {
    float: right;
    display: block;
    background-color: white;
    background-image: url('../images/mickey.jpg');
    width: 5px;
    height: 5px;
    background-size: contain;
    background-repeat: no-repeat;
  }
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: fixed;}
  .topnav.responsive .icon {
    position: fixed;
  }
  .topnav.responsive a {
    display: block;
    text-align: left;
    text-align: left;
    float: right;
    background-repeat: no-repeat;
  }
footer {
  text-align: center;
  padding: 3px;
  background-color: Skyblue;
  color: white;
    bottom: 0px;
    font-size: 12px;
}
}
</style>
<body>
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
  <div class="contain">
<h1>Thank you for your order. </h1>
<p>Thanks for your interest. We will be in contact shortly</p>
</div>
</body>
<footer>
  <h4>Kathy's Cakes inc. /Maya Multimedia LLC</h4><br>
</footer>
