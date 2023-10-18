<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahin's Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
<style>
  body{
background-image: url(http://surl.li/mexde);

}


    .bordered-dropdown {
        border: none; 
        padding: 10px;
        display: inline;
        justify-content: center;
        align-items:center;
        height: 100%;
    }
    .category-list {
        list-style-type: none;
        padding: 0;
    }
    .category-list .dropdown-submenu ul {
        display: inline-flexbox;   
    }

    .category-list .dropdown-submenu:hover ul {
        display: contents ;
        flex-direction: row-reverse;
    }

    .category-list .dropdown-item {
        display: flow-root;
        text-align: Center;
        padding: 10px 15px;
        border: outset;
        border-radius: 10px;
        border-color: #80B3FF;
        text-decoration: none;
        transition:calc()0.2s ease;
    }
    .category-list .dropdown-item:hover {
        background-color: #1F75FE;
        color: white;
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
        transition: all 0.2s ease; 
        display: flow-root;

    }
  
        .nav-item.dropdown:hover .dropdown-menu {
            display: inherit;
        }
    
        /*  styles for the header  */
        .header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }
        /* Add hover effect to the card */
.card:hover {
  transform: scale(1.05);
  transition: all 0.2s ease;
  box-shadow: 0 0 20px rgba(5, 6, 0, 0.3); 
}
 /* Add hover effect to the navbar */
.navbar:hover{
    transform: scale(1.05); 
    box-shadow:3px 3px 5px 6px #fff; 
  transition: all 0.2s ease; 
 
}
.nav-item:hover{
    transform: scale(1.05); 
    box-shadow:3px 3px 5px 6px #fff; 
  transition: all 0.2s ease; 
  border-radius: 10px;
  
  }
  .dropdown-menu .dropdown-item:hover {
        background-color: #007bff; /* Change this to your desired hover background color */
        color: #fff; /* Change this to your desired hover text color */
    }

</style>

</head>
<body class="bg-success p-2 text-dark bg-opacity-50">
    <header  >
        <nav class=" border border-white navbar navbar-expand-lg bg-primary fixed-top tex-light">
            <div class="container md-6   ">
                <!-- Logo -->
                <a class="navbar-brand mx-auto text-white" href="#"><img src=".." width="60" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" d-flex justify-content-center fw-bold collapse navbar-collapse text-white" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item  ">
                            <a class="nav-link text-white" href="#">Home</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link text-white" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact Us</a>
                        </li>
                        <!-- User Profile-->
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle text-white " href="#" id="userProfileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user text-white"></i> User Profile</a>
                            <ul class="dropdown-menu dropdown-menu-right  border border-white" aria-labelledby="userProfileDropdown">
                                <li><a class="dropdown-item " href="#">My Profile</a></li>
                                <li><div class="  dropdown-divider"></div></li>
                                <li><a class="  dropdown-item" href="#" data-toggle="modal" data-target="#signInModal">Sign In</a></li>
                                <li><a class="  dropdown-item" href="#" data-toggle="modal" data-target="#signUpModal">Sign Up</a></li>
                                <li><a class=" dropdown-item" href="#">Settings</a></li>
                                <li><div class=" dropdown-divider"></div></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
    
        </nav>
       
    </header>
    
<main>


<div id="carouselExampleSlidesOnly" class="carousel slide border border-primary-subtle border-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="http://surl.li/meylt" class="d-block w-100"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="10000">
      <img src="http://surl.li/meyix" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="http://surl.li/mezcy" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
        </div>
        <div class="row p-5 ">
            <div class="col-md-8 ">
                <div class="shadow-lg card bg-secondary-subtle border border-primary  mb-4">
                <Center><h3 class="card-header text-white bg-primary border border-light ">TITLE HEADING-1</h3></Center>
                    <div class="card-body">
                        <h5 class="card-title">Title description, Dec 7, 2017</h5>
    
                        <img   src="placeholder-image.jpg" alt="Image" class="img-fluid" style="height:500px;">
                        <p class="card-text ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur quam dolor dolorum quidem eius tenetur beatae, ipsa perspiciatis eligendi, in necessitatibus! Eligendi qui tenetur voluptate quidem ea quae modi illo molestias, ipsa minus cumque et aperiam officiis quod repellat quasi enim nisi officia, totam ipsum veritatis commodi. Neque vero porro aspernatur repellendus, placeat quas quam molestiae repellat iure delectus. Placeat vero quia ullam, ea amet ipsum aperiam ducimus sit illo corporis consequuntur dolorem minus facere temporibus, nemo nobis quos mollitia neque provident. Labore consectetur nam nobis magnam, aliquam ipsam explicabo dicta accusantium natus eaque rerum, modi cum dolor vel voluptas!</p>
                        <a href="#" data-bs-target="blank" class="btn btn-outline-primary">Read More..</a>
                    </div>
                </div>
                <div class="card shadow-lg mb-4 bg-secondary-subtle  border border-primary">
                <Center> <h3 class="card-header text-white bg-primary border border-light">TITLE HEADING-2</h3></Center>
                    <div class="card-body">
                        <h5 class="card-title">Title description, Sep 2, 2017</h5>
                        <img src="placeholder-image.jpg" alt="Image" class="img-fluid" style="height:200px;">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur sequi tenetur molestiae expedita ipsa eum ducimus aliquid provident praesentium. Dolorum sint ducimus impedit delectus doloribus amet quae! Quaerat, sunt.</p>
                        <a href="#" data-bs-target="blank" class="btn btn-outline-primary">Read More..</a>
                    </div>
                </div>
                <div class="card shadow-lg bg-secondary-subtle  border border-primary mb-4">
                   <Center> <h3 class="card-header text-white bg-primary border border-light">TITLE HEADING-3</h3></Center>
                    <div class="card-body">
                        <h5 class="card-title">Title description, Sep 2, 2017</h5>
                        <img src="placeholder-image.jpg" alt="Image" class="img-fluid" style="height:200px;">
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quidem cupiditate, facilis eaque nostrum, itaque ipsam debitis iusto eveniet dicta at inventore aliquid impedit harum totam, optio voluptas. Architecto, aut?</p>
                        <a href="#" data-bs-target="blank" class="btn btn-outline-primary">Read More..</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- "aside" content on the right side -->
                <aside>
                <div class="card bg-secondary-subtle  border border-primary mb-2">
                   <center> <h3 class="card-header text-white bg-primary border border-light">Category</h3></center>
                    <div class="card-body">
                    <div class="bordered-dropdown">
        <ul class="category-list">
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle fw-bold" href="#">Food blogging</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Restaurant Reviews</a></li>
                    <li><a class="dropdown-item" href="#">Food and Travel</a></li>
                    <li><a class="dropdown-item" href="#">Recipes</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle fw-bold " href="#">Fashion</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Street Style</a></li>
                    <li><a class="dropdown-item" href="#">Fashion Reviews</a></li>
                    <li><a class="dropdown-item" href="#">Beauty and Makeup</a></li>
                    <li><a class="dropdown-item" href="#">Fashion Trends</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle fw-bold" href="#">Business</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Entrepreneurship</a></li>
                    <li><a class="dropdown-item" href="#">E-commerce and Online Business</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle fw-bold" href="#">Sports</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sports News</a></li>
                    <li><a class="dropdown-item" href="#">Game Analysis</a></li>
                    <li><a class="dropdown-item" href="#">Team-Specific Blogs</a></li>
                    <li><a class="dropdown-item" href="#">Fitness and Training</a></li>
                </ul>
            </li>
        </ul>
    </div>
      </div>
            </div>
            <div>
                <div class="card shadow-lg mb-4 bg-secondary-subtle  border border-primary">
                 <center>  <h3 class="card-header text-white bg-primary border border-light">Popular Post</h3></center> 
                       <div class="card-body d-flex flex-row mb-3">
                       <a href="#"><img src="placeholder-image.jpg" alt="Image" class="img-fluid p-3"></a>
                    
                       <br>
                       <a href="#"><img src="placeholder-image.jpg" alt="Image" class="img-fluid p-3"></a>                        <br>

                        <br>
                        <a href="#"><img src="placeholder-image.jpg" alt="Image" class="img-fluid p-3"></a>
                    </div>
                    </div>
          </div>
          <div>
          <div class="card shadow-lg mb-4 bg-secondary-subtle  border border-primary">
<center> <h3 class="card-header text-white bg-primary  border border-light">About Me</h3> </center> 
<div class="card-body">
<img class="card-img-top" src="img_avatar1.png" alt="Card image">
    <h3 class="card-title ">John Doe</h3>
    <p class="card-text">Some example text.</p>

    <a href="#" class="btn btn-outline-primary  ">See My Portfolio</a>
    
  </div>
  </div>
  </div>
 
                 <div class="card shadow-lg mb-4 bg-secondary-subtle  border border-primary">
                  <center><h3 class="card-header text-white bg-primary border border-light">Follow Me</h3></center>
                    <div class="card-body ">
                             <!-- Social media icons -->
                    <a href="#"><img src="https://rb.gy/a2kbi" width=15% alt="Facebook"></a>
                    <a href="www.whatsapp.com"><img src="https://rb.gy/wt0kj" width=20% alt="WhatsApp"></a>
                    <a href="www.fiverr.com"><img src="https://t.ly/VsZ5P" width=15% alt="Fiverr"></a>
                    <a href="www.linkedin.com"><img src="https://rb.gy/lxiwz" width=15% alt="LinkedIn"></a>
                </div> 
        </aside>
        </main>
        <!-- Footer Section -->
    <footer class=" bg-primary fw-bold text-light md-10">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &copy; 2023 Mahin's Design
                </div>
                <div class="col-md-6 text-right">
            </div>
        </div>
    </footer>
    </div>
</body>
</html>
