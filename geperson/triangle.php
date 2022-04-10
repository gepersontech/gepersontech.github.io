<?php
    include "includes/header.php";
    include "includes/nav.php"
?>
<!--- Form -->
<br>
<h3>Calculating the Area of a Triangle</h3> <br>
<p class="calp">
The area of a triangle is defined as the total region that is enclosed by the three sides of any particular triangle.</p>
    <br>
    <div class="container">
        <form action="triangle.php" method="get">

            <label for="base">Base</label>
            <input type="number" id="base" name="base" placeholder="Enter value" required>

            <label for="height">Height</label>
            <input type="number" id="height" name="height" placeholder="Enter value" required>


            <label for="subject">Result</label>
            <textarea id="subject" name="subject" placeholder="Output" style="height: 80px" disabled><?php
                if(isset($_GET['base'])){
                    $base = $_GET['base'];
                    $height = $_GET['height'];
                    $area = triangleArea($base,$height);
                    echo "Area is ". $area; 
                }
            ?></textarea>

            <input type="submit" value="Calculate">
        </form>
    </div>

<?php
    include "includes/footer.php";
?>