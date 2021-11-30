<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Aanmeldformulier</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="product_store.php" class="register" method='POST'>
            <fieldset class="row1">
                    <div class="container">
                    <div class="title">Products</div>

                    </div>
                <p>
                    <label class="tekst1">Name:</label>
                    <input type="text" name="form_name" placeholder="name..." required/>

                </p>

                
                <p>
                    <label class="tekst1">Purchase price:</label>
                    <input type="text" class="long" name="form_purchase_price"placeholder="price..." required/>
                </p>

                <p>
                    <label class="tekst1">Selling price:</label>
                    <input type="text" class="long" name="form_selling_price"placeholder="price..." required/>
                </p>

                <div><button class="button-1" role="button">Register </button></div>

            </body>