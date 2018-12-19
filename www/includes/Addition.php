<html>
<body>

<input id="a" type="text"> +
<input id="b" type="text">
<input id="answer" type="text">
    <script>
    document.getElementById("a").addEventListener("keyup", myFunction);
    document.getElementById("b").addEventListener("keyup", myFunction);

    function myFunction() {
    var z = document.getElementById("answer");
    var x = document.getElementById("a").value;
    var y = document.getElementById("b").value;
    z.value = Number(x) + Number(y);
        
    }
    </script>
</body>
</html>