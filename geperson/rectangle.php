<?php
    include "includes/header.php";
    include "includes/nav.php"

?>
<!--- Form -->
<br>
<h3>Calculating the Area of a Rectangle</h3> <br>
<p class="calp">
To find the area of a rectangle you need to multiply the length and the width of a rectangle. We can get the area of a rectangle by following this formula:
<br>
<b>A = L * W</b> 
<br>
A is the area, L is the length, and W is the width.</p>
    <br>
    <div class="container">
        <form action="rectangle.php" method="get">

            <label for="Length">Length</label>
            <input type="number" id="length" name="length" placeholder="Enter value" required>

            <label for="Length">Width</label>
            <input type="number" id="width" name="width" placeholder="Enter value" required>


            <label for="subject">Result</label>
            <textarea id="subject" name="subject" placeholder="Output" style="height: 80px" disabled><?php
                if(isset($_GET['length'])){
                    $length = $_GET['length'];
                    $width = $_GET['width'];
                    $area = rectangleArea($length,$width);
                    echo "Area is ". $area; 
                }
            ?></textarea>

            <input type="submit" value="Calculate">
        </form>
    </div>

<?php
    include "includes/footer.php";
?>