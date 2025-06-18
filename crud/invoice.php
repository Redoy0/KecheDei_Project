<?php 
    include("connection.php");
    
    //$userName = $_POST['userName'];
     // Make sure to sanitize this input in a production environment

// Fetch order details from the database
// $sql = "SELECT * FROM order_now WHERE customer_name = $userName";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     echo "Order id found and table found";

//     $userName = $row['customer_name'];
//     $userAddress = $row['address'];
//     $hallNo = $row['hall_no'];
//     $roomNo = $row['room_no'];
//     $itemType = $row['product'];
//     $serviceType = $row['service'];
//     $quantity = $row['quantity'];
//     $totalPrice = $row['total_price'];

// } else {
//     echo "No order found with ID: $orderID";
//     exit();
// }
    
    $query = "SELECT * FROM order_now ORDER BY id DESC LIMIT 1";
    $data = mysqli_query($conn,$query);
    
    $result = mysqli_fetch_assoc($data);
    if($data)
    {
       // echo "Table Found";
        $userName = $result['customer_name'];
        $userAddress = $result['address'];
        $hallNo = $result['hall_no'];
        $roomNo = $result['room_no'];
        $itemType = $result['product'];
        $serviceType = $result['service'];
        $quantity = $result['quantity'];
        $totalPrice = $result['total_price'];
        
        $Rate= $totalPrice / $quantity;
        
    }
    else
    {
        echo "No record Found";
    }
?>
    

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Invoice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class = "invoice-wrapper" id = "print-area">
            <div class = "invoice">
                <div class = "invoice-container">
                        <div class = "invoice-head">
                            <div class = "invoice-head-top">
                                <div class = "invoice-head-top-left text-start">
                                    <img src = "images/Kechedei.png">
                                </div>
                                <div class = "invoice-head-top-right text-end">
                                    <h3>Invoice</h3>
                                </div>
                            </div>
                            <div class = "hr"></div>
                            <div class = "invoice-head-middle">
                                <div class = "invoice-head-middle-left text-start">
                                    <p><span class = "text-bold">Date</span>: 20/11/2023</p>
                                </div>
                                <div class = "invoice-head-middle-right text-end">
                                    <p><spanf class = "text-bold">Invoice No:</span>16789</p>
                                </div>
                            </div>
                            <div class = "hr"></div>
                            <div class = "invoice-head-bottom">
                                <div class = "invoice-head-bottom-left">
                                    <ul>
                                        <li class = 'text-bold'>Invoiced To:</li>
                                        <li><?php echo $userName;?> </li>
                                        <li><?php echo "Hall No: ".$hallNo." Room No: ".$roomNo;?></li>
                                        <li><?php echo $userAddress;?></li>
                                        
                                        <!-- <li>Daffodil Smart  City</li> -->
                                    </ul>
                                </div>
                                <div class = "invoice-head-bottom-right">
                                    <ul class = "text-end">
                                        <li class = 'text-bold'>Pay To:</li>
                                        <li>Keche Dei</li>
                                        <li>Daffodil Smart City</li>
                                        <li>Khagan, Ashulia</li>
                                        <li>contact@kechedei.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class = "overflow-view">
                            <div class = "invoice-body">
                                <table>
                                    <thead>
                                        <tr>
                                            <td class = "text-bold">Service</td>
                                            <td class = "text-bold">Type</td>
                                            <td class = "text-bold">Rate</td>
                                            <td class = "text-bold">QTY</td>
                                            <td class = "text-bold">Amount</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $serviceType;?></td>
                                            <td><?php echo $itemType;?></td>
                                            <td><?php echo $Rate." tk";?></td>
                                            <td><?php echo $quantity;?></td>
                                            <td class = "text-end"><?php echo $totalPrice." tk";?></td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Wash</td>
                                            <td>Pant</td>
                                            <td>20.00 tk</td>
                                            <td>10</td>
                                            <td class = "text-end">$500.00</td>
                                        </tr>
                                        <tr>
                                            <td>SEO</td>
                                            <td>Optimize the site for search engines (SEO)</td>
                                            <td>$50.00</td>
                                            <td>10</td>
                                            <td class = "text-end">$500.00</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td colspan="4">10</td>
                                            <td>$500.00</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                <div class = "invoice-body-bottom">
                                    <div class = "invoice-body-info-item border-bottom">
                                        <div class = "info-item-td text-end text-bold">Sub Total:</div>
                                        <div class = "info-item-td text-end"><?php echo $totalPrice." tk";?></div>
                                    </div>
                                    <div class = "invoice-body-info-item border-bottom">
                                        <div class = "info-item-td text-end text-bold">Delivary Charge:</div>
                                        <div class = "info-item-td text-end">10 tk</div>
                                    </div>
                                    <div class = "invoice-body-info-item">
                                        <div class = "info-item-td text-end text-bold">Total:</div>
                                        <div class = "info-item-td text-end"><?php echo ($totalPrice+10)." tk";?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            
                    <div class = "invoice-foot text-center">
                        <p><span class = "text-bold text-center">NOTE:&nbsp;</span>This is computer generated receipt and does not require physical signature.</p>

                        <div class = "invoice-btns">
                            <button type = "button" class = "invoice-btn" onclick="printInvoice()">
                                <span>
                                    <i class="fa-solid fa-print"></i>
                                </span>
                                <span>Print</span>
                            </button>
                            <button type = "button" class = "invoice-btn"onclick="printInvoice()">
                                <span>
                                    <i class="fa-solid fa-download"></i>
                                </span>
                                <span>Download</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src = "script.js"></script>
    </body>
</html>
