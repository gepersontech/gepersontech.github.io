<?php
    include "includes/header.php";
    include "includes/nav.php"
?>
<!--- Form -->
<br>
<h3>Calculating the Area of a Circle</h3> <br>
<p class="calp">
The area of a circle is pi times the radius squared (A = π r²). Learn how to use this formula to find the 
area of a circle when given the diameter.</p>
    <br>
    <div class="container">
        <form action="circle.php" method="get">

            <label for="Radius">Radius</label>
            <input type="number" id="radius" name="radius" placeholder="Enter value" required>

            <label for="subject">Result</label>
            <textarea id="subject" name="subject" placeholder="Output" style="height: 80px" disabled><?php
                if(isset($_GET['radius'])){
                    $radiusx = $_GET['radius'];
                    $area = circleArea($radiusx);
                    echo "Area is ". $area; 
                }
            ?></textarea>

            <input type="submit" value="Calculate">
        </form>
    </div>

<?php
    include "includes/footer.php";
?>