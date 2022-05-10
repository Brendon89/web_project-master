<?php

//https://za.pinterest.com/pin/430445676894599490/
session_start();


function navBar()
{
$cartCount=count( $_SESSION["cart"]);

    echo <<< NAV
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Navbar</a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a href="checkout.php"  style="color:black;">$cartCount</a>
    </form>
    </nav>
    NAV;
}

function showList()
{
    $data = array(
        (object)["id" => 1, "item" => "Nora Barrett", "price" => 100, "image" => "images/book1.jpg"], (object)
        ["id" => 2, "item" => "Sing to it", "price" => 150, "image" => "images/book2.jpg"], (object) ["id" => 3, "item" => "Crack The Code", "price" => 50, "image" => "images/book3.jpg"],
        (object) ["id" => 4, "item" => "Lunar Storm", "price" => 200, "image" => "images/book4.jpg"], (object) ["id" => 5, "item" => "Very Nice", "price" => 200, "image" => "images/book5.jpg"],
        (object) ["id" => 6, "item" => "No Place Like Here", "price" => 300, "image" => "images/book6.jpg"],
    );
    foreach ($data as $i) {

        echo <<<LIST
            <div class="items_card">
            <form action="page2.php" method="POST">
            <input type="hidden" value="$i->id" name="id">
            <div class="card_con">

                <div class="texts_card">
                    <p>$i->item
                    </p>
                    <p>$i->price
                    </p>
                </div>
                <div class="img_card">
                    <img src="$i->image">
                </div>
            </div>
                <div class="item_button">
                <button type="submit">View</button>
                </div>
            </form>
        </div>
  
       
        LIST;
    }
}
function showSelected($id)
{
    $data = array(
        (object)["id" => 1, "item" => "Nora Barrett", "price" => 100, "image" => "images/book1.jpg"], (object)
        ["id" => 2, "item" => "Sing to it", "price" => 150, "image" => "images/book2.jpg"], (object) ["id" => 3, "item" => "Crack The Code", "price" => 50, "image" => "images/book3.jpg"],
        (object) ["id" => 4, "item" => "Lunar Storm", "price" => 200, "image" => "images/book4.jpg"], (object) ["id" => 5, "item" => "Very Nice", "price" => 200, "image" => "images/book5.jpg"],
        (object) ["id" => 6, "item" => "No Place Like Here", "price" => 300, "image" => "images/book6.jpg"]
    );
    if ($id != "null") {
        foreach ($data as $i) {

            if ($id == $i->id) {
                echo <<<ITEM
                        <div class="item">
                        <div class="item_con">
    
                            <div class="item_text">
                                <p>Title:$i->item</p>
                                <p> This webpage requires data that you entered earlier in order to be properly displayed. You can
                            send
                            this data again,
                            but by doing so you will repeat any action this page previously performed.
                            Press the reload button to resubmit the data needed to load the page.</p>
                        <br>
                        <p>Price $i->price</p>
                    </div>
                    <div class="item_img">
                        <img src="$i->image".jpg">
                    </div>
    
    
                            </div>
                        <div class="item_button">
                        <form action="index.php" method="POST">
                        <input type="hidden"name="itemID" value="$i->id">
                            <button>ADD</button>
                            </form>
                        </div>
                    </div>

                ITEM;
            }
        }
    }
}

function addToCart($itemID){

     $data = array(
        (object)["id" => 1, "item" => "Nora Barrett", "price" => 100, "image" => "images/book1.jpg"], (object)
        ["id" => 2, "item" => "Sing to it", "price" => 150, "image" => "images/book2.jpg"], (object) ["id" => 3, "item" => "Crack The Code", "price" => 50, "image" => "images/book3.jpg"],
        (object) ["id" => 4, "item" => "Lunar Storm", "price" => 200, "image" => "images/book4.jpg"], (object) ["id" => 5, "item" => "Very Nice", "price" => 200, "image" => "images/book5.jpg"],
        (object) ["id" => 6, "item" => "No Place Like Here", "price" => 300, "image" => "images/book6.jpg"]
    );
 $cartArray= array();

 foreach($_SESSION["cart"] as $list){
array_push($cartArray,(object)["id" => $list->id, "item" => $list->item, "price" => $list->price, "image" => $list->image]);

 }
 foreach ($data  as $list){
 if($list->id==$itemID){

 array_push($cartArray,(object)["id" => $list->id, "item" => $list->item, "price" => $list->price, "image" => $list->image]);

 };

 }
$_SESSION['cart']= $cartArray;



};

function checkoutList()
{
$total=0;
 foreach($_SESSION["cart"] as$key=> $list){

   
    echo<<<LIST
     <tr>
      <td>$list->item</td>
      <td> drglkdl drlkk dfl dsrlijsd siofp </td>
      <td>$list->price</td>
      <td> <form action="checkout.php" method="POST">
      <input type="hidden" value="$key" name="removeID">
            <button>Delete</button>
            </form>
        </td>
      
     </tr>
     

    LIST;
 $total+=$list->price;
   
 }
  echo<<<LIST
     <tr>
      <td><br></td>
      <td> </td>
      <td></td>
      
     </tr>
        <tr>
      <td></td>
      <td>TOTAL</td>
      <td>$total</td>
      
     </tr>
    LIST;


     
};

function removeItem($id){

unset($_SESSION["cart"][$id]);

header("location:checkout.php");



};
