<?php require 'inc/head.php'; ?>
<?php 
    if(!(isset($_SESSION['loginname']))) 
        header("Location: login.php");
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <thead>
                <th>Product</th>
                <th>Quantity</th>
            </thead>
        <?php
            $products=[];
            if(isset($_SESSION['cart']))
            {
                foreach($_SESSION['cart'] as $item)
                {
                    if(in_array($item,$products)) continue;
                    $products[]=$item;
        ?>
                <tr>
                    <td><?=$item?></td>
                    <td><?=array_count_values($_SESSION['cart'])[$item]?></td>
                </tr>
                <?php }
            }
        ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
