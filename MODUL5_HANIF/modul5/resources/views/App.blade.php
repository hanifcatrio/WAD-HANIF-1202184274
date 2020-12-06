<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</head>

<body>
    <ul class="nav justify-content-center">
        <li class="nav-item ">
            <a class="nav-link active text-dark" href="/"><b>HOME</b></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-dark" href="/Product"><b>PRODUCT</b></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-dark" href="/Order"><b>ORDER</b></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-dark" href="/History"><b>HISTORY</b></a>
        </li>
    </ul>
    <div class="container"> 
        @yield ('Template')
    </div>  
</body>

</html>