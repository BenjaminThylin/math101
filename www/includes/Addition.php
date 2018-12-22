<html>
<body>

<input class="mathinputfield" id="a" type="text"> +
<input class="mathinputfield" id="b" type="text"> = 
<input class="mathinputfield" id="answer" type="text">
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