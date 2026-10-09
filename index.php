<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
       <h1>AutoSerwis-Paneel Obsługi Zgłoszeń</h1>
    </header>

        <main>
            <h2>Nowe zgłoszenia</h2>
       <form action="index.php" method="POST">
         <label name>Imie i Nazwisko</label>
          <input type="text" id="name"></form>
           <label name>Numer rejestracyjny pojazdu</label>
          <input type="text" id="num_rejest"></input>
         <label name>Usługa:</label>
          <select name="usługa">
          <option value=""></option>
           <textarea>Uwagi i opis usterki</textarea>
           <button type="submit" name="">Dodaj zgłoszenia</button>
          </select>
        </form>
    </main>
        <aside>
            <h2>Ostatnie naprawy</h2>
            <table>
            <?php
            
            

            ?>
            </table>
        </aside>

        <footer>
            <p>000000000000</p>
        </footer>
</body>
</html>