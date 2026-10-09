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
            <label for="name">Imie i Nazwisko</label>
            <input type="text" id="name" name="name">
            <label for="num_rejest">Numer rejestracyjny pojazdu</label>
            <input type="text" id="num_rejest" name="num_rejest" />
            <label for="usługa">Usługa:</label>
            <select name="usługa">
                <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'warsztat');
                $sql = "SELECT id, nazwa, cena FROM uslugi";
                $result = mysqli_query($polaczenie, $sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<option value='{$row[0]}'>{$row[1]} ({$row[2]} zł)</option>";
                }
                mysqli_close($polaczenie);
                ?>
            </select>
            <textarea>Uwagi i opis usterki</textarea>
            <button type="submit" name="">Dodaj zgłoszenia</button>

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