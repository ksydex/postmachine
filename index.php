<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&amp;subset=cyrillic" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <script src="scripts/main.js"></script>
    <title>Home</title>
</head>

<body>

    <?php include 'php/components/login-popup.php';?>
    <?php include 'php/components/header.php';?>


    <div id="content">
        <div class="container">
            <div class="post">
                <div class="post-author">
                    <img src="content/me.png" alt="Author's avatar">
                    <div>
                        <span>Artyom</span>
                        <p class="post-date">Today</p>
                    </div>
                </div>
                <h3 class="post-title">Why to like the web development in 2019?</h3>
                <div class="post-content">
                    <p>Web development last 3 years is growing bigger and bigger so far. If 10 years ago you only could
                        do a web sites, then now - you can do almost everything with your knowledge in web. Andoid/IOS
                        apps, windows apps, data-bases and so on. With new frameworks like <span><a href="https://angularjs.org/">Angular</a></span>
                        or <span><a href="https://reactjs.org/">React</a></span> you simply can be the developer of
                        anything you want!</p>
                    <p>You, and only you making you future, then... Why not to make a better choice? Start learning web
                        now!</p>
                </div>
            </div>

            <div class="post">
                <div class="post-author">
                    <img src="content/lana.jpg" alt="Author's avatar">
                    <div>
                        <span>Lana</span>
                        <p class="post-date">Yesterday</p>
                    </div>    
                </div>
                <h3 class="post-title">Angular or React? What will make it to top?</h3>
                <div class="post-content">
                    <p>AngularJS is a toolset for building the framework most suited to your application development.
                        It is fully extensible and works well with other libraries. Every feature can be modified or
                        replaced to suit your unique development workflow and feature needs. Read on to find out how.
                    </p>
                    <p>React components implement a <code>render()</code> method that takes input data and returns what
                        to display. This example uses an XML-like syntax called JSX. Input data that is passed into the
                        component can be accessed by <code>render()</code> via this.props. Code example:</p>
                    <p>
                       React is flexible and provides hooks that allow you to interface with other libraries and frameworks. This example uses remarkable, an external Markdown library, to convert the ’s value in real time.
                    </p>    
                </div>
            </div>
        </div>
    </div>

    <?php include 'php/components/footer.php'; ?>

</body>

</html>