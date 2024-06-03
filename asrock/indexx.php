<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz o płycie głównej</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: gainsboro;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .question {
            margin-bottom: 20px;
        }
        .question p {
            margin: 0;
        }
        .answers {
            list-style-type: none;
            padding: 0;
        }
        .answers li {
            margin: 5px 0;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #000000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0a0a0a;
        }
        .result {
            display: none;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz o Płycie Głównej</h1>
        <form id="quizForm">
            <div class="question">
                <p>1. Co to jest?</p>
                <img src="bios.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question1" value="A"> A. chip biosu</label></li>
                    <li><label><input type="radio" name="question1" value="B"> B. Gniazdo procesora</label></li>
                    <li><label><input type="radio" name="question1" value="C"> C. SATA</label></li>
                </ul>
            </div>
            <div class="question">
                <p>2. Co to jest?</p>
                <img src="usb.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question2" value="A"> A. LPT</label></li>
                    <li><label><input type="radio" name="question2" value="B"> B. Złącze usb</label></li>
                    <li><label><input type="radio" name="question2" value="C"> C. PCI</label></li>
                </ul>
            </div>
            <div class="question">
                <p>3. Co to jest?</p>
                <img src="slotram.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question3" value="A"> A. SATA</label></li>
                    <li><label><input type="radio" name="question3" value="B"> B. PCI</label></li>
                    <li><label><input type="radio" name="question3" value="C"> C. Złącze RAM</label></li>
                </ul>
            </div>
            <div class="question">
                <p>4. Co to jest?</p>
                <img src="zasilanie.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question4" value="A"> A. Złącze zasilania</label></li>
                    <li><label><input type="radio" name="question4" value="B"> B. Złącze wentylatora</label></li>
                    <li><label><input type="radio" name="question4" value="C"> C. Złącze usb</label></li>
                </ul>
            </div>
            <div class="question">
                <p>5. Co to jest?</p>
                <img src="bateriacmos.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question5" value="A"> A. Chip biosu</label></li>
                    <li><label><input type="radio" name="question5" value="B"> B. Gniazdo procesora </label></li>
                    <li><label><input type="radio" name="question5" value="C"> C. Bateria CMOS</label></li>
                </ul>
            </div>
            <div class="question">
                <p>6. Co to jest?</p>
                <img src="pci.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question6" value="A"> A. VGA</label></li>
                    <li><label><input type="radio" name="question6" value="B"> B. Złącze PCI</label></li>
                    <li><label><input type="radio" name="question6" value="C"> C. Złącze RAM</label></li>
                </ul>
            </div>
            <div class="question">
                <p>7. Co to jest?</p>
                <img src="wentylator.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question7" value="A"> A. Złącze wentylatora</label></li>
                    <li><label><input type="radio" name="question7" value="B"> B. bateria CMOS</label></li>
                    <li><label><input type="radio" name="question7" value="C"> C. SATA</label></li>
                </ul>
            </div>
            <div class="question">
                <p>8. Co to jest?</p>
                <img src="radiator.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question8" value="A"> A. Gniazdo procesora </label></li>
                    <li><label><input type="radio" name="question8" value="B"> B. Radiator</label></li>
                    <li><label><input type="radio" name="question8" value="C"> C. Złącze RAM</label></li>
                </ul>
            </div>
            <div class="question">
                <p>9. Co to jest?</p>
                <img src="sata.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question9" value="A"> A. chip biosu</label></li>
                    <li><label><input type="radio" name="question9" value="B"> B. Złącze wentylatora</label></li>
                    <li><label><input type="radio" name="question9" value="C"> C. Złącze SATA</label></li>
                </ul>
            </div>
            <div class="question">
                <p>10. Co to jest?</p>
                <img src="chipset.png">
                <ul class="answers">
                    <li><label><input type="radio" name="question10" value="A"> A. Gniazdo procesora</label></li>
                    <li><label><input type="radio" name="question10" value="B"> B. chip biosu</label></li>
                    <li><label><input type="radio" name="question10" value="C"> C. bateria CMOS</label></li>
                </ul>
            </div>






<?php
if(($_POST['first']!="") && ($_POST['last']!="") && ($_POST['score']!="")){
    $first = $_POST['first'];
     $last = $_POST['last'];
     $score = $_POST['score'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'quiz';

$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into osoby(first, last, pkt) values('$first', '$last', '$pkt')";
}
?>
            <button type="button" onclick="checkAnswers()">Sprawdź odpowiedzi</button>
        </form>
        <div class="result" id="result"></div>
    </div>

    <div class="wynik" id="wynik"></div>
    </div>

    <script>
        function checkAnswers() {
            const answers = {
                question1: 'A',
                question2: 'B',
                question3: 'C',
                question4: 'A',
                question5: 'C',
                question6: 'B',
                question7: 'A',
                question8: 'B',
                question9: 'C',
                question10: 'A'
            };

            const form = document.getElementById('quizForm');
            let score = 0;

            for (const [question, correctAnswer] of Object.entries(answers)) {
                const userAnswer = form.elements[question].value;
                if (userAnswer === correctAnswer) {
                    score++;
                }
            }

            const totalQuestions = Object.keys(answers).length;
            const percentageScore = (score / totalQuestions) * 100;

            const result = document.getElementById('result');
            result.textContent = `Twój wynik: ${score} / ${totalQuestions} (${percentageScore.toFixed(2)}%)`;
            result.style.display = 'block';
        }
    </script>
</body>
</html>
