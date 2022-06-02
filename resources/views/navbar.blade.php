<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        tailwind.config = {
          theme: {
            colors: {
                main: '#3C4599',
                sec: '#FAEFB1',
            },
            fontFamily: {
                'poppins': ['Poppins'] 
            },
          }
        }
      </script>
    <title>The Spaces</title>
</head>
<body class="sticky font-poppins">
<header class="container-fluid bg-main">
        <nav class="navbar navbar-expand-lg text-[color:white]">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="spaces">Our Spaces</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="cs">Customer Service</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="article">Article</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>