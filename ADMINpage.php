<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
        integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title>Retail purchasing and tracking</title>
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
    .nav-link {
        margin-right: 10px;
    }

    .nav-link:hover {
        background-color: white;
        border: 2px solid transparent;
        border-radius: 2px;
        transition: 0.4s ease;
    }

    .passive {
        background-color: white;
        border: 2px solid transparent;
        border-radius: 2px;
    }
    </style>
</head>

<body>
    <?php
  if(isset($_POST['button'])){
  
    $con= mysqli_connect('localhost','root','','retail purchasing and tracking');
  
    if (!$con){
      die("connection to  this database failed due to".mysqli_connect_error());
        }
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username_search = "select * from `admin page` where Username = '$username'";

    $query = mysqli_query($con,$username_search);
    $user_pass= mysqli_fetch_assoc($query);
    $password_search = "select * from `admin page` where Password = '$password'";
    $result = $con->query($password_search);
    if($result){
    if ($result->num_rows > 0){
        
     echo "login  successfull";
     ?>
    <script>
    location.replace("AddProduct.php");
    </script>
    <?php
    }else{
      ?>
    <script>
    alert("did not login!!!");
    </script>
    <?php  
    
    }}
    }
  ?>
    <section>
        <h1 style="text-align: center; margin-top: 50px; margin-bottom: 50px; text-shadow: 4px 4px 7px lightblue ; font-family: 'Lemonada', cursive;">Retail
            Purchasing and Tracking</h1>

    </section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">R.P.T</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link passive" href="#">ADMIN <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="COSTUMERpage.php">COSTUMER <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="PROVIDER1.php">PROVIDER 1<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">PROVIDER 2<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="https://source.unsplash.com/2700x800" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/user/erondu/2700x800" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/WLUHO9A_xik/2700x800" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title-font font-medium text-3xl text-gray-900">Manager of website [ADMINS]</h1>
                <p class="leading-relaxed mt-4">Admins can access both data of costumer and provider</p>
            </div>
            <form class="lg:w-2/6 md:w-1/2 bg-gray-200 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0"
                method="POST">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5">ADMIN_LOGIN</h2>
                <input
                    class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                    placeholder="username" name="username" type="text" required>
                <input
                    class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
                    placeholder="password" name="password" type="password" required>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                    name="button">Submit</button>
                <br><button type="button" class="btn btn-danger">reset</button>
                <p class="text-xs text-gray-500 mt-3">Only admins login.</p>
            </form>
        </div>
    </section>


</body>

</html>