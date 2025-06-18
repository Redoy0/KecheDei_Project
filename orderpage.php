<!-- PHP -->

<?php
// Assuming you have a database connection established
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orderdetails";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
        if($conn)
        {
             //echo "Connection Okey";
        }
        else
        {
            echo "Connection Failed".mysqli_connect_error();
        }

// Get form data
    if(isset($_POST['order_now']))
    {
        $customerName = $_POST['userName'];
        $address = $_POST['userAddress'];
        $hallNo = $_POST['hallNo'];
        $roomNo = $_POST['roomNo'];
        $product = $_POST['itemType'];
        $service = $_POST['serviceType'];
        $quantity = $_POST['quantity'];
        $address = ucfirst($address);

        // Calculate total price based on the selected type and service
        $unitPrice = 0; 

        switch ($product) {
            case "Shirt":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 10;
                        break;
                    case "Wash":
                        $unitPrice = 18;
                        break;
                    case "HardWash":
                        $unitPrice = 30;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            case "Pant":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 8;
                        break;
                    case "Wash":
                        $unitPrice = 20;
                        break;
                    case "HardWash":
                        $unitPrice = 32;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            case "Tshirt":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 8;
                        break;
                    case "Wash":
                        $unitPrice = 18;
                        break;
                    case "HardWash":
                        $unitPrice = 25;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            case "Panjabi":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 10;
                        break;
                    case "Wash":
                        $unitPrice = 20;
                        break;
                    case "HardWash":
                        $unitPrice = 30;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            case "Blazer":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 40;
                        break;
                    case "Wash":
                        $unitPrice = 90;
                        break;
                    case "HardWash":
                        $unitPrice = 110;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            case "BedSheet":
                switch ($service) {
                    case "Iron":
                        $unitPrice = 30;
                        break;
                    case "Wash":
                        $unitPrice = 45;
                        break;
                    case "HardWash":
                        $unitPrice = 70;
                        break;
                    default:
                        $unitPrice = 0; 
                }
                break;

            // Add more cases for other product types if needed

            default:
                $unitPrice = 0; // Default price for unknown types
        }

            $totalPrice = $quantity * $unitPrice;
            
            // Insert order details into the database
            $query = "INSERT INTO order_now (customer_name,address,hall_no,room_no,product,service,quantity,total_price) VALUES 
                                    ('$customerName', '$address',$hallNo,$roomNo, '$product', '$service', $quantity,$totalPrice)";
            $data = mysqli_query($conn,$query);
            if ($data) {
                echo "<script>
                    alert('Order successfull. Thanks For Chossing Keche Dei');
                    window.location.href='crud/invoice.php';
                    </script>";
    
                // echo "<script>alert('Order successfull. Thanks For Chossing Keche Dei');</script>";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
                       
    }
 ?>   

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Order Page</title>
    
    <!-- favicon -->
    
    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        body {
            background-color: #008b8b;
            font-family: 'Arial', sans-serif;
        }
        .cont{
            margin-top: 50px;
            margin-bottom: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }
        h2 {
            color: #008b8b;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        textarea.form-control {
            resize: vertical;
        }
        .btn-primary {
            background-color: #008b8b;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .dwn{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<header id="nino-headerSub">
        <div id="nino-headerInnerSub">                  
            <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo/KechedeiWhite.png" alt=""></a>
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="nino-menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="index.php?#nino-services">Service</a></li>
                                <li><a href="pricelist.php">Price List</a></li>
                                <li><a href="orderpage.php">Order</a></li>
                                <li><a href="#nino-latestBlog">Blog</a></li>
                                <li><a href="index.php?#nino-story">About</a></li>
                                <li><a href="signup_signin.php" target="_blank">Sign In</a></li>
                                
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <ul class="nino-iconsGroup nav navbar-nav">
                            <li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
                            <li><a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </header><!--/#header-->
<div class="container cont">
    <h2 class="mb-4 text-center">Place Your Order</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="userName">User Name:</label>
            <input type="text" class="form-control" id="userName" name="userName" required>
        </div>
        <div class="form-group">
            <label for="userAddress">Address:</label>
            <textarea class="form-control" id="userAddress" name="userAddress" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="hallNo">Hall No(For DIU Students):</label>
            <input type="text" class="form-control" id="hallNo" name="hallNo"required>
        </div>
        <div class="form-group">
            <label for="roomNo">Room No:</label>
            <input type="text" class="form-control" id="roomNo" name="roomNo"required>
        </div>
        <div class="form-group">
            <label for="itemType">Select Item Type:</label>
            <select class="form-control" id="itemType" name="itemType" required>
                <option value="" disabled selected>Not selected</option>
                <!-- Add other item types -->
                <option value="Shirt">Shirt</option>
                <option value="Pant">Pant</option>
                <option value="Tshirt">T-Shirt</option>
                <option value="Panjabi">Panjabi</option>
                <option value="Blazer">Blazer</option>
                <option value="BedSheet">Bed Sheet</option>
            </select>
        </div>
        <div class="form-group">
            <label for="serviceType">Select Service Type:</label>
            <select class="form-control" id="serviceType" name="serviceType" required>
                <option value="" disabled selected>Not selected</option>
                <!-- Add other service types -->
                <option value="Iron">Iron</option>
                <option value="Wash">Wash</option>
                <option value="HardWash">Hard Wash</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
        </div>
        <!-- <div class="form-group">
            <label for="specialInstructions">Special Instructions:</label>
            <textarea class="form-control" id="specialInstructions" name="specialInstructions" rows="3"></textarea>
        </div>
         -->
        <div class="form-group">
            <label>Total Price:</label>
            <span id="totalPrice">0.00 tk</span>
        </div>
        
        <div class="text-center">
            <button type="submit" name="order_now" class="btn btn-primary">Submit Order</button>
        </div>
        
    </form>
    <!-- <div class="text-center">
            <a href="crud/invoice.php"> 
                <button name="order_now" class="btn btn-primary dwn">Download Invoice
                </button>
            </a>
        </div> -->
</div>

    <!-- Latest Blog
    ================================================== -->
    <section id="nino-latestBlog">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Our stories</span>
                Latest Blog
            </h2>
            <div class="sectionContent">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <article>
                            <div class="articleThumb">
                                <a href="#"><img src="images/our-blog/blog-1.jpg" alt=""></a>
                                <div class="date">
                                    <span class="number">20</span>
                                    <span class="text">Nov</span>
                                </div>
                            </div>
                            <h3 class="articleTitle"><a href="">Winter Care Guide: Maintaining and Protecting Your Leather Jacket</a></h3>
                            <p class="articleDesc">
                                As the crisp, cool air of fall begins to embrace us, the trees shed their leaves, and we all start planning for the cozy winter months.
                            </p>
                            <div class="articleMeta">
                                <a href="#"><i class="mdi mdi-eye nino-icon"></i> 543</a>
                                <a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 15</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <article>
                            <div class="articleThumb">
                                <a href="#"><img src="images/our-blog/blog-2.jpg" alt=""></a>
                                <div class="date">
                                    <span class="number">14</span>
                                    <span class="text">Nov</span>
                                </div>
                            </div>
                            <h3 class="articleTitle"><a href="">6 Clever Uses for Old Sheets and Towels</a></h3>
                            <p class="articleDesc">
                                Do you have any old bed sheets and towels? What would like to do with them?
                            <div class="articleMeta">
                                <a href="#"><i class="mdi mdi-eye nino-icon"></i> 995</a>
                                <a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 42</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <article>
                            <div class="articleThumb">
                                <a href="#"><img src="images/our-blog/blog-3.jpg" alt=""></a>
                                <div class="date">
                                    <span class="number">12</span>
                                    <span class="text">Nov</span>
                                </div>
                            </div>
                            <h3 class="articleTitle"><a href="">5 Reasons Why Using A Laundry Service Is More Eco-Friendly</a></h3>
                            <p class="articleDesc">
                                In the era of eco-conscious living, where every action we take holds the power to shape our envIronment, it's crucial to recognize the impact even the simplest tasks can have.
                            </p>
                            <div class="articleMeta">
                                <a href="#"><i class="mdi mdi-eye nino-icon"></i> 1264</a>
                                <a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 69</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#nino-latestBlog-->

    
        <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="colInfo">
                        <div class="footerLogo">
                            <a calss= "navbar-brand" href="index.php" ><img class="logo" src="images/logo/Kechedei.png" alt=""></a> 
                        </div>
                        <p>
                            where clinliness regin suprime.
                        </p>
                        <div class="nino-followUs">
                            <div class="totalFollow"><span>15k</span> followers</div>
                            <div class="socialNetwork">
                                <span class="text">Follow Us: </span>
                                <a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
                            </div>
                        </div>
                        <form action="" class="nino-subscribeForm">
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <h3 class="nino-colHeading">Blogs</h3>
                        <ul class="listArticles">
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-4.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">Winter Care Guide: Maintaining and Protecting Your Leather Jacket</a></h3>
                                    <div class="date">Nov 20, 2023</div>
                                </div>
                            </li>
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-5.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">6 Clever Uses for Old Sheets and Towels</a></h3>
                                    <div class="date">Nov 14, 2023</div>
                                </div>
                            </li>
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-6.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">5 Reasons Why Using A Laundry Service Is More Eco-Friendly</a></h3>
                                    <div class="date">Nov 12, 2023</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <h3 class="nino-colHeading">instagram</h3>
                        <div class="instagramImages clearfix">
                            <a href="#"><img src="images/instagram/ld-1.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-2.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-3.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-4.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-5.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-6.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-7.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-8.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-9.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-3.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-4.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/ld-5.jpg" alt=""></a>
                        </div>
                        <a href="#" class="morePhoto">View more photos</a>
                    </div>
                </div>
            </div>
            <div class="nino-copyright">Copyright &copy; 2023 <a target="_blank" href="http://www.kechedei.com/" title="KecheDei.com">kechedei.com</a>. All Rights Reserved. <br/> Keche Dei by <a href="https://www.facebook.com/SabbirAhamedRedoyRs">Team Keche Dei</a></div>
        </div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
        <input type="text" placeholder="Search..." class="form-control nino-searchInput">
        <i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Calculate total price dynamically based on quantity and selected item and service type
    $('#quantity, #itemType, #serviceType').on('input', function () {
        var quantity = $('#quantity').val();
        var itemType = $('#itemType').val();
        var serviceType = $('#serviceType').val();
        var pricePerItem;

        // Set the price based on the selected item and service type
        switch (itemType) {
            case 'Shirt':
                switch (serviceType) {
                    case 'Iron':
                        pricePerItem = 10.00;
                        break;
                    case 'Wash':
                        pricePerItem = 18.00;
                        break;
                    case 'HardWash':
                        pricePerItem = 30.00;
                        break;
                    default:
                        pricePerItem = 10.00; // Default to Iron if service type is not recognized
                }
                break;
                case 'Pant':
                    // Add pricing logic for Pant
                    switch (serviceType) {
                        case 'Iron':
                            pricePerItem = 8.00;
                            break;
                        case 'Wash':
                            pricePerItem = 20.00;
                            break;
                        case 'HardWash':
                            pricePerItem = 32.00;
                            break;
                        default:
                            pricePerItem = 0.00; // Default to Iron if service type is not recognized
                    }
                    break;

                case 'Tshirt':
                    // Add pricing logic for T-Shirt
                    switch (serviceType) {
                        case 'Iron':
                            pricePerItem = 8.00;
                            break;
                        case 'Wash':
                            pricePerItem = 18.00;
                            break;
                        case 'HardWash':
                            pricePerItem = 25.00;
                            break;
                        default:
                            pricePerItem = 0.00; // Default to Iron if service type is not recognized
                    }
                    break;
                case 'Panjabi':
                    // Add pricing logic for T-Shirt
                    switch (serviceType) {
                        case 'Iron':
                            pricePerItem = 10.00;
                            break;
                        case 'Wash':
                            pricePerItem = 20.00;
                            break;
                        case 'HardWash':
                            pricePerItem = 30.00;
                            break;
                        default:
                            pricePerItem = 0.00; // Default to Iron if service type is not recognized
                    }
                    break;
                case 'Blazer':
                    // Add pricing logic for T-Shirt
                    switch (serviceType) {
                        case 'Iron':
                            pricePerItem = 40.00;
                            break;
                        case 'Wash':
                            pricePerItem = 90.00;
                            break;
                        case 'HardWash':
                            pricePerItem = 110.00;
                            break;
                        default:
                            pricePerItem = 0.00; // Default to Iron if service type is not recognized
                    }
                    break;
                case 'BedSheet':
                    // Add pricing logic for T-Shirt
                    switch (serviceType) {
                        case 'Iron':
                            pricePerItem = 30.00;
                            break;
                        case 'Wash':
                            pricePerItem = 45.00;
                            break;
                        case 'HardWash':
                            pricePerItem = 70.00;
                            break;
                        default:
                            pricePerItem = 0.00; 
                    }
                    break;

                // Add cases for other item types

                default:
                    // Default pricing for others
                    pricePerItem = 0.00; // Default price
        }


        var totalPrice = quantity * pricePerItem;
        $('#totalPrice').text('$' + totalPrice.toFixed(2));
    });
</script>
    
</body>
</html>


    

