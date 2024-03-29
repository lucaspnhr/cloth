<?php

function header_nav($isLogged)
{
    $result = '<div class="container__logo">
            <a href="index.php">CLOTH</a>
        </div>
        <div class="nav__bar">
            <a class="nav__link" href="women.php">Women</a>
            <a class="nav__link" href="men.php">Men</a>
            <a class="nav__link" href="kids.php">Kids</a>
        </div>';
    if (!$isLogged) {
        $result .= '<div class="container__account">
                        <a class="btn btn__link sign-in" href="signin.php">SIGN IN</a>
                        <div class="container__cart">
                             <a href="cart.php"><img src="site_images/icons/carrin.png" alt=""></a>
                        </div>
                    </div>';
    } else {
        $result .= '<div class="container__account">
                        <div class="container__my-account">
                            <img src="site_images/icons/Avatar.png" alt="user-icon">
                            <span class="my-account">My Account</span>
                            <div class="dropdown-menu">
                                <a href="my-orders.php" class="dropdown-item">Previous Orders</a>
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>                       
                        </div>
                        <div class="container__cart">
                            <a href="cart.php"><img src="site_images/icons/carrin.png" alt=""></a>
                         </div>
                    </div>';
    }

    echo $result;
}

function header_no_nav()
{
    echo '<div class="container__logo">
         <a href="index.php">CLOTH</a>
        </div>';
}

function footer()
{
    echo '<ul class="footer__list">
            <li class="footer__item"><a href="">Terms and Conditions</a></li>
            <li class="footer__item"><a href="">Support Us</a></li>
            <li class="footer__item"><a href="">SAC</a></li>
            <li class="footer__item">
                <p>Quality and Security</p>
                <ul class="labels__list">
                    <li class="label__item"><img src="site_images/footer_label_top3_ibest.png" alt="" class="label__img"></li>
                    <li class="label__item"><img src="site_images/label-blindado.png" alt="" class="label__img" id="site_blindado"></li>
                    <li class="label__item"><img src="site_images/label-reclameaqui.png" alt="" class="label__img"></li>
                    <li class="label__item"><img src="site_images/label_ebit.png" alt="" class="label__img"></li>
                </ul>
            </li>
        </ul>
        <p>Developed By ManoJesus.Inc</p>';
}

function main_content_card($page_title, $products)
{
    $result = '<div class="page__title">
                <p id="title-page">' . $page_title . '</p>
            </div>
            <div class="card_container">';
    foreach($products as $row) {
        $result .= '<div class="card">
                        <div class="card__img">
                            <a href="buy_page.php?name='.$row["name"].'"><img class="product__img" src="' . $row["image_path"] . '" alt="product_img"></a>
                        </div>
                        <div class="card__content">
                            <a href="buy_page.php?name='.$row["name"].'"><p class="product__name">' . $row["name"] . '</p></a>
                            <p class="product__price">$' . $row["price"] . '</p>
                        </div>
                   </div>
            ';
    }
    $result .= '</div>';
    echo $result;
}

function cart_item(array $product){
    echo '<div class="cart__product flex">
                <img class="cart__product-image" src="'.$product['image_path'].'" alt="product_image">
                <span  class="cart__product-name" >'.$product['name'].'</span>
                <span  class="cart__product-price" id="price__'.$product['name'].'">$'.$product['price'].'</span>
                <div class="input__quantity">
                    <button type="button" class="btn quantity__btn add" onclick="increment(\''.$product['name'].'\')"><i class="fas fa-regular fa-plus"></i></button>
                    <input type="text" name="quantity" class="product__quantity" id="quantity_'.$product['name'].'" oninput="updateQuantityIn(this,\''.$product['name'].'\')" onchange="updateQuantityCh(event,\''.$product['name'].'\')" value="'.$product['quantity'].'" maxlength="2">
                    <button type="button" class="btn quantity__btn sub" onclick="decrement(\''.$product['name'].'\')"><i class="fas fa-regular fa-minus"></i></button>
                </div>
                <span  class="cart__product-total" id="total__'.$product['name'].'">$'.number_format($product['total_price'],2).'</span>
                <button class="btn btn_delete" onclick="deleteItem(\''.$product['name'].'\')">Delete</button>
            </div>';
}
function cart_no_item(){
    echo '<div class="cart__product flex"> <p>No items added to cart</p> </div>';
}
function order_item(array $orders){
    echo '<div class="cart__product flex">
                <img class="cart__product-image" src="'.$orders['image_path'].'" alt="product_image">
                <span  class="cart__product-name" >'.$orders['product_name'].'</span>
                <span  class="cart__product-price" >$'.$orders['product_price'].'</span>
                <span class="">'.$orders['quantity'].'</span>
                <span  class="cart__product-total" >$'.number_format($orders['product_price']*$orders['quantity'],2).'</span>
            </div>';
}