<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <!-- Header Section -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <!-- User Profile Dropdown -->
 <!-- User Profile Dropdown -->
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="userProfileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> User Profile
    </a>
    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userProfileDropdown">
        <li><a class="dropdown-item" href="#">My Profile</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#signInModal">Sign In</a></li>
        <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#signUpModal">Sign Up</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li><a class="dropdown-item" href="#">Logout</a></li>
    </ul>
</li>

<!-- Custom CSS for dropdown hover effect -->
<style>
    /* Style the dropdown to show on hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
</style>


        
    </div>
    </ul>
</li>

          </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main class="container mt-4">
        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-md-4">
       

            <style>
    .bordered-dropdown {
        border: 2px solid #3498db; /* Change border size and color as desired */
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .category-list {
        list-style-type: none;
        padding: 0;
    }

    .category-list .dropdown-submenu ul {
        display: none;
    }

    .category-list .dropdown-submenu:hover ul {
        display: inline-flex;
        flex-direction: column;
    }

    .category-list .dropdown-item {
        display: block;
        text-align: left;
        padding: 10px 15px;
        border: 2px solid #B1AFF9;
        background-color: #9CC5F3;
        color: #333;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .category-list .dropdown-item:hover {
        background-color: #DCFBA6;
    }
</style>

<aside>
    <div class="bordered-dropdown">
        <ul class="category-list">
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Food blogging</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                    <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Fashion</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                    <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Business</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                    <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Sports</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Subcategory 1</a></li>
                    <li><a class="dropdown-item" href="#">Subcategory 2</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>






            </div>
            <style>
    .blog-post {
        text-align: center; /* Center-align the text within the blog post div */
    }

    .btn {
        display: block;
        margin: 0 auto; /* Center-align the "Read More" button */
    }
</style>

            <!-- Content Section -->
            <div class="col-md-8   ">
                <div class="row">
                    <!-- Popular Blogs -->
                    <div class="col-md-4">
                        <div class="blog-post  border border-2 border-success-subtle text-wrap">
                            <h3>Blog Post 1</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequuntur tempora dolores aspernatur nostrum eaque ut ea magnam corrupti quam eos quae porro, ab ipsum quas, unde quia sapiente alias in ipsa, architecto minima velit quisquam. Consequatur aliquid placeat totam reiciendis, nobis ex, soluta pariatur, voluptas sint harum nulla. Quod.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post border border-2 border-success-subtle text-wrap">
                            <h3>Blog Post 2</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quasi, recusandae totam optio consequatur, inventore repudiandae quibusdam tempore voluptate debitis exercitationem reiciendis magnam beatae enim iure possimus sequi laudantium voluptas harum officiis autem, dolore officia? Perspiciatis sed aspernatur numquam aliquid consequatur quia. Dolores quam consequuntur molestias at esse laudantium officiis!</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post border border-2  border-success-subtle text-wrap">
                            <h3>Blog Post 3</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, maxime! Cum eius facilis voluptas iste? Labore repudiandae sed distinctio, eos vitae fugiat excepturi consectetur soluta corrupti modi vel atque beatae consequuntur ad. Quasi, corrupti voluptatum repellat repudiandae quia tempore magnam voluptatibus culpa similique alias, praesentium officia quam beatae soluta obcaecati.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-dark text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &copy; 2023 My Blog
                </div>
                <div class="col-md-6 text-right">
                    <!-- Social media icons -->
                    <a href="#"><img src="facebook.png" width=6% alt="Facebook"></a>
                    <a href="www.whatsapp.com"><img src="" alt="WhatsApp"></a>
                    <a href="www.fiverr.com"><img src="" alt="Fiverr"></a>
                    <a href="www.linkedin.com"><img src="" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
