<?

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?require_once($_SERVER['DOCUMENT_ROOT'].'/asset/inc/_meta.php')?>
</head>
<body>
<?require_once($_SERVER['DOCUMENT_ROOT'].'/asset/page/header.php')?>

<? 
$date = mktime(0, 0, 0, date("m"), date("d")-7, date("Y"));
echo date('d-m-Y H:i:s',$date);
?>
    <div class="am"></div>

    <div class="products">

    <? // $item = массив, товаров.
     require_once($_SERVER['DOCUMENT_ROOT'].'/array.php');?>

        <div class="item class class2 class3" data-id="54">
            <div class="img"></div>
            <div class="sku">
                <div class="fild">
                    <input class="" type="radio" name="product_54" data-sku-id="" data-color-id="blue">
                    <span> Синий </span>
                </div>
                <div class="fild">
                    <input class="" type="radio" name="product_54" data-sku-id="" data-color-id="red">
                    <span> Белый </span>
                </div>
            </div>
            <div class="area_btn __add">
                <a href="javascript:void(0)" class="btn">добавить</a>
            </div>
        </div>

        <div class="item class class2 class3" data-id="86">
            <div class="img"></div>
            <div class="sku">
                <div class="fild">
                    <input class="" type="radio" name="product_86" data-sku-id="" data-color-id="blue">
                    <span> Синий </span>
                </div>
                <div class="fild">
                    <input class="" type="radio" name="product_86" data-sku-id="" data-color-id="red">
                    <span> Белый </span>
                </div>
            </div>
            <div class="area_btn __add">
                <a href="javascript:void(0)" class="btn">добавить</a>
            </div>
        </div>


    </div>

    <form action="" method="POST">
    

    </form>

    <?require_once($_SERVER['DOCUMENT_ROOT'].'/asset/page/footer.php')?>

</body>
</html>