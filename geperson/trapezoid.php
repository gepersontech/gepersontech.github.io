<?php
    include "includes/header.php";
    include "includes/nav.php"
?>
<!--- Form -->
<br>
<h3>Calculating the Area of a Trapezoid</h3> <br>
<p class="calp">
The area of a trapezoid can be calculated if the length of its parallel sides and the distance (height) between them is given. The formula for the area of a trapezoid is expressed as,
<br>
<b>A = ½ (a + b) h</b>
<br>
where (A) is the area of a trapezoid, 'a' and 'b' are the bases (parallel sides), and 'h' is the height (the perpendicular distance between a and b)</p>
    <br>
    <div class="container">
        <form action="trapezoid.php" method="get">

            <label for="baseA">BaseA</label>
            <input type="number" id="baseA" name="baseA" placeholder="Enter value" required>

            <label for="baseB">BaseB</label>
            <input type="number" id="baseB" name="baseB" placeholder="Enter value" required>

            <label for="height">Height</label>
            <input type="number" id="height" name="height" placeholder="Enter value" required>


            <label for="subject">Result</label>
            <textarea id="subject" name="subject" placeholder="Output" style="height: 80px" disabled><?php
                if(isset($_GET['baseA'])){
                    $baseA = $_GET['baseA'];
                    $baseB = $_GET['baseB'];
                    $height = $_GET['height'];
                    $area = trapezoidArea($baseA, $baseB, $height);
                    echo "Area is ". $area; 
                }
            ?></textarea>

            <input type="submit" value="Calculate">
        
        </form>
    </div>
    <br><br><br><br>
<?php
    include "includes/footer.php";
?>