<?php
$current_page = "cart";
include("../util/routing_path.php");
require_once("../model/database.php");
require_once("../model/cart.php");
include("../model/product_db.php");
include("../view/header.php");
include("../account/login_modal.php");

session_start();
?>

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Shopping cart</h1>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $home_path; ?>index.php">Home</a>
                    </li>
                    <li>Shopping cart</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <p class="text-muted lead">You currently have <?php echo get_num_items(); ?> item(s) in your cart.</p>
            </div>


            <div class="col-md-9 clearfix" id="basket">

                <div class="box">


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th colspan="2">Quantity</th>
                                    <th>Unit price</th>
                                    <th>Discount</th>
                                    <th colspan="2">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($_SESSION['cart'])) {

                                    $subTotal = 0;

                                    foreach ($_SESSION['cart'] as $product_id => $quantity) {
                                        $product = get_product($product_id);
                                        $total = round($product['price'] * $quantity, 2);
                                        $subTotal += $total; ?>
                                        <tr>
                                            <!-- Product -->
                                            <td><a href="#">
                                                    <img
                                                        src="<?php echo $home_path; ?>img/<?php echo $product['image_source']; ?>"
                                                        alt="<?php echo $product['name']; ?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $product['name']; ?></a></td>
                                            <!-- Quantity -->

                                            <form action='cart_controller.php' method='post'>
                                                <td>
                                                    <input type='hidden' name='product_id'
                                                           value="<?php echo $product['id']; ?>">
                                                    <input type='number' name='quantity' class="form-control"
                                                           value="<?php echo $quantity; ?>">
                                                </td>
                                                <td>
                                                    <input type='hidden' name='action' value='update_quantity'>
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fa fa-refresh"></i> Update
                                                    </button>
                                                </td>
                                            </form>

                                            <!-- Unit Price -->
                                            <td>$ <?php echo number_format($product['price'], 2); ?></td>
                                            <!-- Discount -->
                                            <td>$ 0.00</td>

                                            <!-- Total -->
                                            <td>$ <?php echo number_format($total, 2); ?></td>

                                            <!-- Remove -->
                                            <td>
                                                <form action='cart_controller.php' method='post'>
                                                    <input type='hidden' name='product_id'
                                                           value="<?php echo $product['id'] ?>">
                                                    <input type='hidden' name='action' value='remove_product'>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash-o"></i> Remove
                                                    </button>
                                                </form>
                                            </td>


                                        </tr>
                                        <?php
                                    }

                                }
                                ?>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="6">Total</th>
                                    <th colspan="2">$ <?php echo number_format($subTotal, 2); ?></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.table-responsive -->

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="<?php echo $home_path; ?>catalog/products.php" class="btn btn-default"><i
                                        class="fa fa-chevron-left"></i> Continue shopping</a>
                            </div>
                            <div class="pull-right">
                                <form class="form-inline" style="display: inline-block"action='<?php echo $home_path ?>cart/cart_controller.php' method='post'>
                                    <input type='hidden' name='action' value='empty_cart'>
                                    <button type="submit" class="btn btn-default" >
                                        <i class="fa fa-recycle"></i> Clear Cart
                                    </button>
                                </form>
                                <a href="<?php echo $home_path; ?>checkout/delivery_address.php" class="btn  btn-template-main">
                                    Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>

                </div>
                <!-- /.box -->


            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order summary</h3>
                    </div>
                    <p class="text-muted">Shipping and additional costs are calculated based on the values you have
                        entered.</p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Order subtotal</td>
                                <th>$ <?php echo number_format($subTotal, 2); ?></th>
                            </tr>
                            <tr>
                                <td>Shipping and handling</td>
                                <th>$ <?php  $shipping = 10; echo number_format($shipping, 2); ?> </th>
                            </tr>
                            <tr>
                                <td>Tax (13%)</td>
                                <th>$ <?php  $tax = $subTotal * 0.13; echo number_format($tax, 2); ?></th>
                            </tr>
                            <tr class="total">
                                <td>Total</td>
                                <th>$ <?php  $grandTotal = $subTotal + $tax + $shipping; echo number_format($grandTotal, 2); ?></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>



            </div>
            <!-- /.col-md-3 -->

        </div>

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->
<!-- *** FOOTER ***
_________________________________________________________ -->
<?php include("../view/footer.php"); ?>
