<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michelle's Profile</title>
    <link rel="shortcut icon" href="media/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <nav class="navbar navbar-expand-xxl fixed-top bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#Home">
                <img src="media/logo.png" alt="Bootstrap" width="80" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="#Home">HOME</a>
                    <a class="nav-link" href="#About">ABOUT ME</a>
                    <a class="nav-link" href="#Contact">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0" class="isi">
        <div id="Home" class="p-5">
            <div class="Text1">
                <h1>Hi, I'm Michelle Angela!</h1>
                <p class="fs-5">and this is a little bit tiny informations about me..</p>
            </div>
            <img src="../media/image(1).jpg" alt="" class="img-fluid rounded profileImg1">
        </div>
        
        <h5 id="About">Item 1-1</h5>
        <h5 id="Contact">Item 1-2</h5>
        
    </div>
</body>
</html>