@extends('layouts.master')
@extends('components.menu-left')
@extends('components.main-footer')
 
@section('css_include')
@stop

@section('javascript_include')
@stop

@section('content')
        <!-- Right Column Start-->
        <div class="right_colmn">
            <!-- Bread Crumb and Search Section -->
            <div class="breadcrumb_search">
                <!-- Bread Crumb Section -->
                <ul class="crumb">
                    <li><a href="#" class="home">&nbsp;<span class="dis_none">Home</span></a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Categories</a></li>
                </ul>
                <!-- Search Section -->
                <ul class="search">
                    <li><input name="" type="text" class="search_bar" /></li>
                    <li><input name="" type="button" class="go" /></li>
                </ul>
            </div>
            <!-- Paragraph Section -->
            <div class="para">
                <h2 class="heading">Welcome to Your Store</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna. Ut bibendum dolor nec augue. Ut tempus luctus metus. Sed a velit. Pellentesque at libero <a href="#">elementum ante condimentum sollicitudin</a>. Pellentesque lorem ipsum, semper quis, interdum et, sollicitudin eu, purus. Vivamus fringilla ipsum vel orci. Phasellus vitae massa at massa pulvinar pellentesque. Fusce tincidunt libero vitae odio. Donec malesuada diam nec mi. Integer hendrerit pulvinar ante. Donec eleifend, nisl eget aliquam congue, justo metus venenatis neque, vel tincidunt elit augue sit amet velit. Nulla facilisi. Aenean suscipit. 
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulum in, volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non, suscipit bibendum, auctor ac, arcu. Vestibulum dapibus. Sed pede lacus, pretium in, condimentum sit amet, mollis dapibus, magna. Ut bibendum dolor nec augue. Ut tempus luctus metus. Sed a velit. Pellentesque at libero elementum ante condimentum sollicitudin. Pellentesque lorem ipsum, semper quis, interdum et, sollicitudin eu, purus. Vivamus fringilla ipsum vel orci. Phasellus vitae massa at massa pulvinar pellentesque. Fusce tincidunt libero vitae odio. Donec malesuada diam nec mi. Integer hendrerit pulvinar ante. Donec eleifend, nisl eget aliquam congue, justo metus venenatis neque, vel tincidunt elit augue sit amet velit. Nulla facilisi. Aenean suscipit. 
                </p>
            </div>
            <!-- Product Listing Section -->
            <div class="prod_listing">
                <h2 class="heading">New products for this category</h2>
                <ul>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img2.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img3.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img4.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img4.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img3.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img2.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                    <li>
                        <a href="prod_detail"><img src="/templates/images/img1.gif" alt="" /></a>
                        <p class="title">Die Hard With A Vengeance</p>
                        <p class="price bold">GP $ 500, 00</p>
                        <a href="cart" class="button"><span>Buy Now</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Right Column End-->
 
    <div class="clear"></div>
    <!-- Product Scroller Start -->
    <div id="prod_scroller">
        <a class="prev_btn"></a>
<div class="anyClass">
    <ul>    
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
        <li>
            <a href="#"><img src="/templates/images/img_prod.gif" alt="" /></a>
            <a class="prod_name" href="#">Product 1</a>
        </li>
    </ul>
</div>
<a class="next_btn"></a>
<div class="clear"></div>
  </div>
  <div class="clear"></div>
    <!-- Product Scroller End -->
</div>
<div class="clear"></div>
@stop