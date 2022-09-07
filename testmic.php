<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Cost Savings Calculator</title>



    <script language="JavaScript">
    function doMath3() {
        var one = eval(document.theForm3.elements[0].value)
        var two = eval(document.theForm3.elements[1].value)
        var three = eval(document.theForm3.elements[3].value)

        if (document.theForm3.elements[3].value = "z4") {
            var prodZ4 = (((one * two) * 4.25) * 12) - 1680
            alert("Your yearly savings if you buy a Commuter Express Zone 4 monthly pass is $" + prodZ4 + ".")
        }

        if (document.theForm3.elements[3].value = "z3") {
            var prodZ3 = (((one * two) * 3.75) * 12) - 1488
            alert("Your yearly savings if you buy a Commuter Express Zone 3 monthly pass is $" + prodZ3 + ".")
        }

        if (document.theForm3.elements[3].value = "z2") {
            var prodZ2 = (((one * two) * 3) * 12) - 1200
            alert("Your yearly savings if you buy a Commuter Express Zone 2 monthly pass is $" + prodZ2 + ".")
        }

        if (document.theForm3.elements[3].value = "z1") {
            var prodZ1 = (((one * two) * 2.5) * 12) - 960
            alert("Your yearly savings if you buy a Commuter Express Zone 1 monthly pass is $" + prodZ1 + ".")
        }

        if (document.theForm3.elements[3].value = "Base") {
            var prodBase = (((one * two) * 1.5) * 12) - 684
            alert("Your yearly savings if you buy a Commuter Express Base monthly pass is $" + prodBase + ".")
        }

    }
    </script>



</head>

<body>

    <form name="theForm3">
        Days you commute monthly:
        <input type="text">
        Daily trips on Commuter Express:
        <input type="text">
        Choose Zone: <select name="zone">
            <option value="Base">Base</option>
            <option value="z1">Zone 1</option>
            <option value="z2">Zone 2</option>
            <option value="z3">Zone 3</option>
            <option value="z4">Zone 4</option>
        </select>
        <input type="button" value="Show result" onclick="doMath3()">

    </form>


</body>

</html>