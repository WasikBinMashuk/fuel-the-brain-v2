<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Inika:wght@700&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* .body{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        } */
        footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 40px;
            background-color: navy;
            font-size: 25px;
            font-family: 'Delicious Handrawn', cursive;
        }
        .header{
            height: 40px;
            //background-color: blue;
        }
        .my-link-style:hover{
            text-decoration: underline;
        }
        .service-section{
            background-color: lightgrey;
        }

		/* .container {
			display: flex;
			align-items: center;
			justify-content: center;
			padding-top: 40px;
		} */

		img {
			max-width: 100%;
			max-height:100%;
		}

		.text {
			font-size: 20px;
			padding-left: 20px;
			color: navy;
		}
		h1{
			font-family: 'Delicious Handrawn', cursive;
			font-family: 'Inika', serif;
		}
    </style>
</head>

<div class="body">

    @guest
    
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <div class="d-none d-md-inline-block form-inline m-auto ">
            <a href="/" >
                <img class="" style="width:40px;" class="" src="{{ asset('img/book_logo.jpg') }}" alt="logo" >
                <span class="text-white font-weight-bold">Fuel The Brain</span>
            </a>
        </div> 
    </nav>

    @else
    
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <div class="d-none d-md-inline-block form-inline m-auto ">
            <a href="/" >
                <img class="" style="width:40px;" class="" src="{{ asset('img/book_logo.jpg') }}" alt="logo" >
                <span class="text-white font-weight-bold">Fuel The Brain</span>
            </a>
        </div> 
        <div class="text-white">
            {{ Auth::user()->name }}
        </div>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    
    @endguest


    <main class="py-4">
		@yield('frontend')
    </main>

    
    

    <footer class=" d-flex justify-content-center">
        <p class="text-white font-weight-bold">A self improvement tracker</p>
    </footer>
    

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>