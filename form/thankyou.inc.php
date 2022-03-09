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

 <title>Kathys Cake's</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

<body>
 <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-dark  ">
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
                    <a class="nav-link" href="story.html">About Us</a>
                </li>


            </ul>
        </div>
    </nav>

  <div class="contain">
<h1>Thank you for your order. </h1>
<img src="images/fourkate.jpg" alt="pay" width="400" height="500">
<p>Thanks for your interest. We will be in contact shortly</p>
</div>
</body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <footer>
        <br>
        <h4>Kathy's Cakes Inc <br>Powered by Maya Multimedia LLC</h4><br>
    </footer>