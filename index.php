<html>
    <head>
        <title>
            GPA to Percentage calculator
        </title>
        <link rel="icon" type="image/x-icon" href="arithmetic.jpg">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1>
            Enter your GPA score here and we will calculate your percentage
        </h1>
        <form action="form.php" method="post" onsubmit="return calculate_percent()">
            Name:<input type="text" name="fname" id="fname"><br>
            GPA:<input type="number" name="fgpa" id="fgpa" step=".01" min="0"><br>
            Submit:<input type="submit" value="Calculate"><br>
        </form>
        <script>
            function calculate_percent()
            {
                let val=parseFloat(document.getElementById("fgpa").value);
                if(!isNaN(val))
                {
                    let percentage=(val*10)-7.5;
                    alert("Your percentage is:" + percentage);
                }
                else
                {
                    alert("Please enter valid percentage score");
                }
                
            }
        </script>    

    </body>
</html>
