<?php
$activeString = "class = \"active \"";
$filename = basename($_SERVER["PHP_SELF"]);
$index="";
$shop ="";
$about = "";
$account ="";
switch ($filename){
    case "index.php":
        $index = $activeString;
        break;
    case "shop.php":
        $shop = $activeString;
        break;
    case "about.php":
        $about = $activeString;
        break;
    case "account.php":
        $account = $activeString;
        break;
    default:
        break;
}
echo "<div class=\"header\" id=\"header1\"> <!-----------header----------->
        <div class=\"container\">
             <div class=\"navbar\">
                <button style=\"background-color:#171b20; border: none;\" onclick=\"location.href='index.html'\">
                    <div class=\"logo\">
                        <img src=\"images2/icon-1.png\" width=\"100px\">
                            <a href=\"index\"></a>
                    </div>
                </button>
                <nav>
                    <ul>
                        <li ><a href=\"index.php\" $index >Home</a></li>
                        <li><a href=\"shop.php\" $shop >Products</a></li>
                        <li><a href=\"\" $about>About</a></li>
                        <li><a href=\"account.php\" $account >Account</a></li>
                    </ul>
                </nav>
                <a href='cart.php'><img src=\"images2/bag-shopping-solid.svg\" width=\"30px\" height=\"30px\"></a>
            </div>";
?>