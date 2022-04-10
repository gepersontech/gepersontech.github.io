<?php
    include "includes/header.php";
    include "includes/nav.php"
?>
<!--- Form -->
<br>
<h3>Calculating the Area of a Parallelogram</h3> <br>
<p class="calp">
A = B * H where B is the base, H is the height, and * means multiply. The base and height of a parallelogram must be perpendicular.</p>
    <br>
    <div class="container">
        <form action="parallelogram.php" method="get">

            <label for="Base">Base</label>
            <input type="number" id="base" name="base" placeholder="Enter value" required>

            <label for="Height">Height</label>
            <input type="number" id="height" name="height" placeholder="Enter value" required>

            <label for="subject">Result</label>
            <textarea id="subject" name="subject" placeholder="Output" style="height: 80px" disabled><?php
                if(isset($_GET['base'])){
                    $base = $_GET['base'];
                    $height = $_GET['height'];
                    $area = parallelogramArea($base,$height);
                    echo "Area is ". $area; 
                }
            ?></textarea>

            <input type="submit" value="Calculate">
        </form>
    </div>

<?php
    include "includes/footer.php";
?>