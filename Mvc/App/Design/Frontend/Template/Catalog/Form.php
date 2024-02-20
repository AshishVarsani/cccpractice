<div class="form" style="border:1px solid black; width:35%; padding: 15px">
        <h2>Category Form</h2><br>
        <form action="">
        <style>
        body {
        font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form {
            border: 1px solid #333;
            width: 35%;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 15px;
        }

        .row {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
            <div class="row">
                <label for="name">Name : </label>
                <input type="text" name="catalog_product[name]" id="name">
            </div>
            <div class="row">
                <label for="status">Status : </label>
                <input type="text" name="catalog_product[status]" id="status">
            </div>

            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>