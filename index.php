<?php
// Überprüfen, ob das Formular abgesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sammeln der Formulardaten
    $vorname = $_POST['Vor-/Nachname'];
    $alter = $_POST['Alter'];
    $stufe = $_POST['select1'];
    $telefon = $_POST['phone'];
    $inhaber = $_POST['Inhabertel'];
    $mitteilung = $_POST['Mitteilung'];

    // Formatieren der Daten für die Textdatei
    $data = "Vor-/Nachname: $vorname\n";
    $data .= "Alter: $alter\n";
    $data .= "Schnupper Stufe: $stufe\n";
    $data .= "Telefonnummer: $telefon\n";
    $data .= "Inhaber der Telefonnummer: $inhaber\n";
    $data .= "Mitteilung: $mitteilung\n\n";

    // Öffnen der Datei und Anhängen der Formulardaten
    $file = fopen("form_data.txt", "a");

    // Daten in die Datei schreiben
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Daten erfolgreich gespeichert!";
    } else {
        echo "Fehler beim Speichern der Daten.";
    }
}
?>
