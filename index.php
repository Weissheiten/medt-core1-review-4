<?php

// ÜBERBLICK SMUE MEDT CORE 1
// ===========================
// Es sollen zwei verschiedene Klassen für Attraktionen eines Vergnügungsparks erstellt werden
// Ein Rollercoaster (Achterbahn) hat einen Namen (name), Preis (fee), Höhe (height) und Mindestalter (minimumgAge)
// Ein Kinderkarussell (Carousel) hat einen Namen (name), Preis (fee) und eine Geschwindigkeit in metern pro sekunde (speed)
// Durch das Interface soll sichergestellt werden, dass sowohl die Klasse Rollercoaster,
// als auch Carousel in Auflistungen für Attraktionen verwendet werden können.

// Hinweis: Autoloading mit Composer ist für Sie vorbereitet. Falls Sie dieses verwenden wollen, vergessen Sie nicht nach Erstellen Ihrer Klassen
// bzw. Änderungen dieser den Befehl "composer dump-autoload" auf der Kommandozeile. Autoloading ist optional und NICHT zwingend notwendig

//
// AUFGABE 1
// Erstellen Sie eine Klasse "Rollercoaster", die von der abstrakten Klasse erbt und das Interface implementiert
// Die Klasse soll über die zusätzlichen Properties height und minimumAge verfügen
// getDescription gibt die Info "Rollercoaster", sowie die Höhe und das Mindestalter in einem einzelnen string zurück

// AUFGABE 2
// Erstellen Sie eine Klasse "Carousel", die von der abstrakten Klasse erbt und das Interface implementiert
// Die Klasse soll über das zusätzliche Property speed verfügen
// getDescription gibt die Info "Carousel", sowie die Geschwindigkeit in einem einzelnen string zurück

// AUFGABE 3
// Weisen Sie direkt in der index.php 2 Rollercoaster und 1 Carousel einem neuen Array mit dem Namen "attractions" zu
// Wählen Sie die Namen/Werte beliebig

// AUFGABE 4
// Führen Sie eine Schleife über das Array aus und geben Sie jede Attraktion mit Namen, Preis und Description in einer
// ungeordneten Liste aus (<ul>)

// AUFGABE 5
// Führen Sie das File index.php über die Command Line aus und zeigen Sie das Ergebnis vor

// AUFGABE 6
// Legen Sie ein Repository auf einem VC Server Ihrer Wahl an (zB GitHub, GitLab, etc.) und pushen Sie das Ergebnis
// auf den Branch "main"
// Sie können entweder die Files (ohne .git Verzeichnis) in ein neues Directory kopieren und von dort arbeiten oder
// einfacher mit dem Befehl
// git remote set-url <remote_name> <remote_url>
// die Ziel URL des Repositories ändern

// AUFGABE 7
// Taggen Sie den funktionalen Code mit der Version v1.0.0 in Ihrem Repository