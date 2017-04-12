<?php
$rep = "../../";
$section_type = 'store';
$page = "Store Home Page";
include $rep . 'php/include/head.php';
include $rep . 'php/include/store/menu.php';
// include $rep . 'php/include/customer/product.php';

if(isset($_POST['searchAll']))
{
    $loc = (isset($_POST['location']) && !empty($_POST['location'])) ? trim(htmlspecialchars($_POST['location'])) : 'accra';
    $sort = (isset($_POST['sort']) && !empty($_POST['sort'])) ? trim(htmlspecialchars($_POST['sort'])) : 'date';
    $order = (isset($_POST['order']) && !empty($_POST['order'])) ? trim(htmlspecialchars($_POST['order'])) : 'ASC';
    $min = (isset($_POST['min-price']) && !empty($_POST['min-price'])) ? trim(htmlspecialchars($_POST['min-price'])) : 0;
    $max = (isset($_POST['max-price']) && !empty($_POST['max-price'])) ? trim(htmlspecialchars($_POST['max-price'])) : 0;
    $min = ($min < 0 || !is_int((int)$min) || (int)$min > (int)$max) ? 0 : $min;
    $max = ($max <= 0 || !is_int((int)$max) || (int)$min > (int)$max) ? 1000000 : $max;
    switch($sort)
    {
        case 'date' :
            $sort = 'billboard_post_date';
            break;
        case 'price' :
            $sort = 'billboard_price';
            break;
        case 'size' :
            $sort = 'billboard_width';
            break;
        case 'avail' :
            $sort = 'billboard_availability';
            break;
    }
    $loc = '%' . $loc . '%';
    if($order === 'ASC')
    {
        $bills = $db->prepare('SELECT * FROM billboards WHERE billboard_location LIKE ? AND (billboard_price BETWEEN ? AND ?) ORDER BY ? ASC');
    }
    else {
        $bills = $db->prepare('SELECT * FROM billboards WHERE billboard_location LIKE ? AND (billboard_price BETWEEN ? AND ?) ORDER BY ? DESC');
    }

    $bills->execute(array($loc, $min, $max, $sort));
}
?>

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-top box-primary">
                <h1 class="text-center">Search for a Billboard</h1>
                <form class="form-search" method="post" action="./">
                    <div class="form-group">
                      <label for="search" class="sr-only">Make by location</label>
                      <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                        <input type="search" class="form-control" id="search" name="location" placeholder="Type your location here" required="">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-3">
                                <label for="sort">Sort By</label>
                                <select id="sort" name="sort" class="form-control">
                                    <option value="date">date</option>
                                    <option value="price">price</option>
                                    <option value="size">size</option>
                                    <option value="avail">availability</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <label for="order">Order</label>
                                <select id="order" name="order" class="text-center form-control">
                                    <option value="ASC">Ascendant</option>
                                    <option value="DESC">Descendant</option>
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <label for="price">Search by Price in cedis</label>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Min</span>
                                            <input type="number" name="min-price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="input-group">
                                            <span class="input-group-addon">Max</span>
                                            <input type="number" name="max-price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn btn-success col-xs-12" type="submit" name="searchAll">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
    <?php if (!empty($bills)) {
        while($bill = $bills->fetch())
        { ?>
        <div class="col-md-6 col-lg-3">
            <div class="box crop box-squared-w-h">
                <img src="<?php echo $rep; ?>media/images/billboards/1.jpg" alt="Picture Billboards" class="img-responsive center-el-V"/>
                <div class="infobill text-center trans">
                    <div class="text-block center-el-V">
                        <div class="trans">
                            <h1 class="text-success"><?php echo $bill['billboard_price'] ; ?><br><small>per Month</small></h1>
                            <p class="loc"><span class="glyphicon glyphicon-map-marker"></span><?php echo $bill['billboard_location'] ; ?></p>
                            <p>
                                <a href="../article/?id=<?php echo $bill['billboard_id'] ; ?>" class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-search"></span></a>
                                <button class="btn btn-primary bg-primary btn-3d btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span></button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } } ?>
    </div>

<?php include $rep . 'php/include/footer.php'; ?>
