<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title> Phone Calculator</title>
    <link rel= "stylesheet" href="styles1.css">
    
</head>
<body>

    <div id="phonecalculator">
        <input id="display" readonly>
        <div id="calcubuttons">
            <button onclick="appendToDisplay('+')"class="operator-btns">+</button>
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('-')"class="operator-btns">-</button>
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('*')"class="operator-btns">*</button>
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('/')"class="operator-btns">/</button>
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="calculate()">=</button>
            <button onclick="clearDisplay()"class="operator-btns">C</button>
            




        </div>  


    </div>
    <script src="calcu.js"></script>
</body>
</html>