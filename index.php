<!DOCTYPE html>
<html>
<head>
    <title>Food Order System</title>
</head>
<body>
    <h2>Welcome to Rob's Canteen!</h2>
    <form method="post" action="">
        <label>Food 1: Pork Adobo</label>
        <label>Price: &#8369;70</label><br><br>

        <label>Food 2: Bicol Express</label>
        <label>Price: &#8369;70</label><br><br>

        <label>Food 3: Rice</label>
        <label>Price: &#8369;15</label><br><br>

        <label for="quantity1">Quantity of Food 1:</label>
        <input type="number" id="quantity1" name="quantity1" min="0" required><br><br>

        <label for="quantity2">Quantity of Food 2:</label>
        <input type="number" id="quantity2" name="quantity2" min="0" required><br><br>

        <label for="quantity3">Quantity of Food 3:</label>
        <input type="number" id="quantity3" name="quantity3" min="0" required><br><br>

        <label for="cash">Amount of Cash:</label>
        <input type="number" id="cash" name="cash" required><br><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>

    <?php
    if(isset($_POST['submit'])){
        // Retrieve values from the form
        $quantity1 = $_POST['quantity1'];
        $quantity2 = $_POST['quantity2'];
        $quantity3 = $_POST['quantity3'];
        $price1 = 70;
        $price2 = 70;
        $price3 = 15;
        $cash = $_POST['cash'];

        // Calculate total cost
        $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3);

        // Calculate change
        $change = $cash - $total_cost;

        // Display total cost and change
        echo "<h3>Order Summary:</h3>";
        echo "Total Cost: &#8369;" . $total_cost . "<br>";
        if ($change >= 0) {
            echo "Change: &#8369;" . $change;
        } else {
            echo "Insufficient cash! Please provide more.";
        }
    }
    ?>
</body>
</html>
