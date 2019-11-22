<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <title>Layout</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
<style>
    @yield('style')
.lbl-cat{
    font-size: 20px;
    padding-right: 5px;
}

body{
    line-height:1;
}
ol,ul{
    list-style:none;
}
blockquote,q{
    quotes:none;
}
blockquote:before,blockquote:after,
q:before,q:after{
    content:’’;
    content:none;
}
/* remember to define visible focus styles! 
:focus{
    outline:?????;
} */

/* remember to highlight inserts somehow! */
ins{
    text-decoration:none;
}
del{
    text-decoration:line-through;
}

table{
    border-collapse:collapse;
    border-spacing:0;
}

/*------------------------------------*\
    $MAIN
\*------------------------------------*/

@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);



/* Typography */

h1 {
    font-size: 28px;
    font-weight: 300;
    flex: 1;
}

h5 {
    font-weight: 500;
    line-height: 1.7em;
}

h6 {
    color: #666;
    font-size: 14px;
}

/* Product Layout */

.product-filter {
    display: flex;
    padding: 30px 0;
}

.sort {
    display: flex;
    align-self: flex-end;
}

.collection-sort {
 display: flex;
    flex-direction: column;
}

.collection-sort:first-child {
    padding-right: 20px;
}

label {
    color: #666;
    font-size: 10px;
    font-weight: 500;
    line-height: 2em;
    text-transform: uppercase;
}

.products {
    display: flex;
    flex-wrap: wrap;
}

.product-card {
    display: flex;
    flex-direction: column;
    
    padding: 2%;
    flex: 1 16%;
    
    background-color: #FFF;
    box-shadow: 0px 0px 1px 0px rgba(0,0,0,0.25);
}

.product-image img {
    width: 100%;
}

.product-info {
    margin-top: auto;
    padding-top: 20px;
    text-align: center;
}

@media ( max-width: 920px ) {
    
    .product-card {
        flex: 1 21%;
    }
    
    .products .product-card:first-child, 
    .products .product-card:nth-child(2) {
        flex: 2 46%;
    }
    
}

@media ( max-width: 600px ) {
    
    .product-card {
        flex: 1 46%;
    }
    
}

@media ( max-width: 480px ) {
    
    h1 {
        margin-bottom: 20px;
    }
    
    .product-filter {
        flex-direction: column;
    }
    
    .sort {
        align-self: flex-start;
    }
    
}

</style>
</head>
 
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aloha</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <ul class="navbar-nav mr-auto float-right">
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Register</a>
      </li>
    </ul>
 
  </div>
</nav>
    @yield('content')

 
<script src="/js/jquery-3.1.1.slim.min.js"></script>
<script src="/js/tether.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>