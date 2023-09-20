<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8"/>
     <title>Zakład Produkcyjny</title>
     <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
        <body>
        <div id="container">
        <div id="baner">
            <h1>Zakład Produkcyjny</h1>
        </div>
        <div id="lewy">
            <img src="spawanie.png">
        </div>
        <div id="prawy">
            <h4> Oferujemy nastepujace uslugi:</h4>
            <div id="ol1">
                
            <ol>
                <li>Toczenie</li>
                <li>Frezowanie</li>
                <li>Spawanie</li>
                <li>Malowanie</li>
            </ol>
        </div>
        <div id="baner">
        </div>
        <div id="dolny">
        <h4>Dodaj klienta:</h4>
        <form method="POST" action="zapisz.php">
            <label for="name">Imię</label>
            <input type="text" name="imie"/></br>
            <label for="surname">Nazwisko</label>
            <input type="text" name="nazwisko"></br>
            <label for="phone">Telefon</label>
            <input type="text" name="telefon"></br>
            <label for="opis">Opis usługi</label>
            <input type="textarea" name="desc">
            <input type="submit" value="Zapisz">
        </form>

            <h4>Dodaj usługę:</h4>
        <form method="POST" action="zapisz1.php">
            <label for="desc">opis</label>
            <input type="text" name="opis" placeholder="opis"/></br>
            <label for="date">data</label>
            <input type="text" name="data"></br>
            <label for="price">cena</label>
            <input type="text" name="cena"></br>
            <label for="town">Klient</label>
            <input type="text" name="klient"/></br>
            <label for="position">Pracownik</label>
            <input type="text" name="pracownik"/></br>


            <input type="submit" value="Dodaj">
</form>

            <h4>Dodaj pracownika:</h4>
        <form method="POST" action="zapisz2.php">
            <label for="name">Imie</label>
            <input type="text" name="imie"/></br>
            <label for="surname">Nazwisko</label>
            <input type="text" name="nazwisko"></br>
            <label for="phone">Wiek</label>
            <input type="text" name="wiek"></br>
            <label for="desc">Miasto</label>
            <input type="text" name="miasto"/></br>
            <label for="name">Stanowisko</label>
            <input type="text" name="stanowisko"/></br>


            <input type="submit" value="Dodaj1">
        </form>
        </div>
        <div id="stopka">
            <h4>Witrynę przygotował: Adrian Wołowski ZSBEM</h4>
        </div>

</body>
</html>