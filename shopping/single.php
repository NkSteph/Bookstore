<?php require "../config/config.php"; ?>
<?php require "../includes/header.php"; ?>

<?php 
     if(isset($_GET['id'])){

        $id = $_GET['id'];

        $row = $conn->query("SELECT * FROM products WHERE status = 1 AND id='$id'");
        $row->execute();

        $products = $row->fetch(PDO::FETCH_OBJ);

     }else{
        echo "404";
     }


?>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="../images/<?php echo $products->image; ?>" width="250"/> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <a href="
                                    <?php echo APPURL; ?>" class="ml-1 btn btn-primary"><i class="fa fa-long-arrow-left"></i> Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> 
                                    <h5 class="text-uppercase"><?php echo $products->name; ?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $products->price; ?></span>
                                    </div>
                                </div>
                                <p class="about"><?php echo $products->description; ?></p>
                              
                                <div class="cart mt-4 align-items-center"> <button class="btn btn-primary text-uppercase mr-2 px-4"><i class="fas fa-shopping-cart"></i> Add to cart</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 


  <?php require "../includes/footer.php"; ?>