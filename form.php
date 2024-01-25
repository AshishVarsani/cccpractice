<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Page Title</title>
</head>
<body>
    <form action="form_backend.php" method="post">
                
                    <input type="text" class="input" name="ccc_product[product_name]" placeholder="Product Name" id="product_name" required pattern="[a-zA-Z'-'\s]*"> <br><br>
                    <input type="text" class="input" name="ccc_product[sku]" placeholder="SKU" id="sku" required pattern="[a-zA-Z'-'\s]*">
                <br><br>
                    <label for="product_type">Product Type</label>
                    <div class="radio-group">
                        <input type="radio" id="simple" name="ccc_product[product_type]" value="simple" checked>
                        <label for="simple">Simple</label>
                        <input type="radio" id="bundle" name="ccc_product[product_type]" value="bundle">
                        <label for="bundle">Bundle</label>

                <br><br>
                    <label name="ccc_product[category]">Category:</label>
                    <select id="category" name="ccc_product[category]" class="input">
                        <option value="bgr">Bar & Game Room</option>
                        <option value="bedroom">Bedroom</option>
                        <option value="decor">Decor</option>
                        <option value="dining_Kitchen">Dining & Kitchen</option>
                        <option value="lighting">Lighting</option>
                        <option value="living_room">Living Room</option>
                        <option value="mattresses">Mattresses</option>
                        <option value="office">Office</option>
                        <option value="outdoor">Outdoor</option>
                    </select>
                <br><br>
                    <input type="text" class="input" name="ccc_product[manufacturer_cost]" placeholder="Manufacturer Cost" id="manufacturer_cost"> <br><br>
                    <input type="text" class="input" name="ccc_product[shipping_cost]" placeholder="Shipping Cost" id="shipping_cost"> <br><br>
                    <input type="text" class="input" name="ccc_product[total_cost]" placeholder="Total Cost" id="total_cost"> <br><br>
                    <input type="text" class="input" name="ccc_product[price]" placeholder="Price" id="price"> <br><br>

                    <label for="status">Status:</label>
                    <select id="status" name="status" class="input">
                        <option value="enabled">Enabled</option>
                        <option value="disabled">Disabled</option>
                    </select>
                <br><br>
                <label for="created_at">Created At:</label>
                    <input type="date" class="input" name="ccc_product[created_at]" placeholder="Created At" id="created_at"> <br><br>
                <label for="updated_at">Updated At:</label>
                    <input type="date" class="input" name="ccc_product[updated_at]" placeholder="Updated At" id="updated_at"> <br><br>
                    <input type="submit" class="submit" value="Submit" id="submit" name="submit">
    </form>
</body>
</html>