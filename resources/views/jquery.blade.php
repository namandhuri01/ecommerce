<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Fly To Cart Effect | Webdevtrick.com </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
    
.clear {
    clear: both;
}
.items {
    display: block;
    margin: 20px 0;
}
.item {
    background-color: #fff;
    float: left;
    margin: 0 10px 10px 0;
    width: 205px;
    padding: 10px;
    height: 290px;
}
.item img {
    display: block;
    margin: auto;
    max-width: 200px;
    max-height: 200px;
}
.shopping-cart {
    display: inline-block;
    background: url('https://webdevtrick.com/wp-content/uploads/cart.png') no-repeat 0 0;
    width: 24px;
    height: 24px;
    margin: 0 10px 0 0;
}

</style>
</head>
<body>

    <div class="wrapper">
     <h1>Buy Phone Online</h1>
 <span><i class="shopping-cart"></i></span>

    <div class="clear"></div>

    <div class="items">

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/71JJB8w5erL._SL1500_.jpg" alt="item" />
             <h2>Samsung Note 10</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51QlMs%2BEnQL._SL1000_.jpg" alt="item" />
             <h2>Huawie P30 pro</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51sl-z1S1dL._SL1500_.jpg" alt="item" />
             <h2>Samsung S10</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/512xYZ5OjGL._SL1000_.jpg" alt="item" />
             <h2>OnePlus 7</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61cWoqY8uwL._SL1137_.jpg" alt="item" />
             <h2>Nokia 7</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>

        <div class="item">
            <img src="https://images-na.ssl-images-amazon.com/images/I/51opJo00PqL._SL1052_.jpg" alt="item" />
             <h2>LG V40</h2>

            <p>Price: <em>$999</em>
            </p>
            <button class="add-to-cart" type="button">Add to cart</button>
        </div>
    </div>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script>
    $('.add-to-cart').on('click', function () {
        var cart = $('.shopping-cart');
        var imgtodrag = $(this).parent('.item').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
            .css({
            'opacity': '0.5',
                'position': 'absolute',
                'height': '150px',
                'width': '150px',
                'z-index': '100'
            })
            .appendTo($('body'))
            .animate({
            'top': cart.offset().top + 10,
                'left': cart.offset().left + 10,
                'width': 75,
                'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
</script>

</body>
</html>