<?php include('partials/menu.php'); ?>


        <div class="main-content">
        <div class="wrapper">

       <div class="login" <?php
     if(isset($_SESSION['login']))
     {
         echo $_SESSION['login'];
         unset ($_SESSION['login']);
     }
     ?> </div>
     
<section class="food-search text-center">
        <div class="container">
       <form method="post" action="">
<input class="search-box" type="search" name="search" placeholder="Search for items..." autocomplete="off"  >
<input class="search-btn btn-primary" type="submit" name="submit" value="search">
       </form>
        </div>
    </div>
    </section>

     <section class="categories">
        <div class="container">
            <h2>Categories</h2>
            <br/>
        <div class="box-3 float-container">
            <img src="../images/pizza.jpg" alt="Pizza" class="img-body">
       <h2 class="float-text">Pizzas</h2>
        </div>
        <div class="box-3 float-container">
            <img src="../images/momo.jpg" alt="Pizza" class="img-body">
       <h2 class="float-text">Momos</h2>
        </div>
        <div class="box-3 float-container">
            <img src="../images/burger.jpg" alt="Pizza" class="img-body">
       <h2 class="float-text">Burger</h2>
        </div>
    </div>
    <div class="clearfix"></div>
    </section>


    <section class="food-menu">
        <div class="container">
           <h2>Explore Foods</h2>
           <br/>
           <br/>
           <div class="food-menu-box">
            <span >
                <img class="food-menu-img" src="../images/menu-momo.jpg" alt="">
            </span>
          <div class="food-menu-description">
          <h4 class="food-menu-description-text">Momo </h4>
          <p class="food-menu-description-text">Price: $2.6</p> 
          <p class="food-menu-description-text">Made with Italian sauce,chicken and veggies</p> 
          <br/>
          <a href="#" class="order-btn" >Order now</a>
          </div>
         </div>


       <div class="food-menu-box">
        <span >
            <img class="food-menu-img" src="../images/menu-pizza.jpg" alt="">
        </span>
      <div class="food-menu-description">
      <h4 class="food-menu-description-text">Pizza </h4>
      <p class="food-menu-description-text">Price: $5</p> 
      <p class="food-menu-description-text">Made with Italian sauce,chicken and veggies</p> 
      <br/>
      <a href="#" class="order-btn" >Order now</a>
      </div>
     </div>


     <div class="food-menu-box">
        <span >
            <img class="food-menu-img" src="../images/menu-pasta.jpg" alt="">
        </span>
      <div class="food-menu-description">
      <h4 class="food-menu-description-text">Pasta </h4>
      <p class="food-menu-description-text">Price: $3.8</p> 
      <p class="food-menu-description-text">Made with Italian sauce,chicken and veggies</p> 
      <br/>
      <a href="#" class="order-btn" >Order now</a>
      </div>
     </div>


     <div class="food-menu-box">
        <span >
            <img class="food-menu-img" src="../images/menu-burger.jpg" alt="">
        </span>
      <div class="food-menu-description">
      <h4 class="food-menu-description-text">Burger </h4>
      <p class="food-menu-description-text">Price: $4.2</p> 
      <p class="food-menu-description-text">Made with Italian sauce,chicken and veggies</p> 
      <br/>
      <a href="#" class="order-btn" >Order now</a>
      </div>
     </div>
</div>
               <div class="clearfix"></div>
    </section>


        

        <?php include('partials/footer.php'); ?>
        