<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
    <div class="bg-main h-24">
        <div class="flex justify-end">
            <div class="flex text-xl py-8 mx-1 font-medium text-[color:white]">
                <a href="home.php" class="px-4">Home</a>
                <a href="#" class="px-4">Our Spaces</a>
                <a href="#" class="px-4">Customer Service</a>
                <a href="#" class="px-4">Articles</a>
            </div>
            <div class="flex text-xl py-5 mx-4 mr-8 text-main">
                <button class="bg-sec px-5 py-1 rounded-3xl">Login</button>
            </div>
        </div>
    </div>
</body>
</html>