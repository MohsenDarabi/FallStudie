# studieFall
php website project for cbw
Fallstudie BLOG

Das Blog (auch: der Blog) oder auch Web-Log ist ein auf einer Website geführtes und damit – meist öffentlich – einsehbares Tagebuch oder Journal, in dem mindestens eine Person, der Web-Logger, kurz Blogger, Aufzeichnungen führt, Sachverhalte protokolliert oder Gedanken niederschreibt.

Die geforderte Fallstudie BLOG soll einen Blog mit HTML, CSS, JavaScript und PHP sowohl für das Frontend und das Backend realisieren.

Hinweis: Alle blau gekennzeichneten Angaben in dieser Fallstudie sind innerhalb der Lösung zwingend gefordert und zu realisieren. Erweiterungen, Vertiefungen liegen selbstverständlich in Ihren Ermessen.

Der Blog wird über einen sogenannten Blogger (Herausgeber oder Verfasser von Blog-Beiträgen) verwaltet und gepflegt. Nur der Blogger darf Beiträge im Blog erstellen, bearbeiten oder löschen. Benutzer können und dürfen diese Blog-Beiträge nur lesen und ggf. bewerten. 

Zu den zahlreichen Themen, über die geschrieben werden kann, haben sich eigene Untergruppierungen herausgebildet. Die Abgrenzung erfolgt meist nach dem Inhalt (PHP, Technik, Reise, Politik, CSS, Java, etc.). Wählen Sie für Ihren Blog mindesten einen Themenbereich aus über den Sie bloggen wollen (z.B. PHP). Optional bietet es sich an verschiedene Blog-Themen alternativ anzubieten (mehr als ein Blog-Thema).

Neben der validen und fehlerfreien Lösung (Kodierung, Auszeichnung und Umsetzung) wird - wie auch bei der IHK-Prüfung gefordert – das Erstellen eines Projektantrages und einer Projektdokumentation gefordert.

Der Projektantrag beschreibt was gemacht wird und in welchen Teilen (Arbeitspakete [AP], Vorgänge) das Projekt zerlegt wurde. Für jedes AP ist die Beschreibung und Dauer (und hier nicht gefordert, Kosten) anzugeben (Schätzung). Achten Sie darauf (gerade bei der IHK !!!), dass die Gesamtdauer nicht die vorgegebene Gesamtdauer überschreitet (hier bis zum 21. März, 76 Unterrichtseinheiten). Gehen Sie (üblicherweise) von den Projektstrukturplan (PSP) aus, erstellen die einzelnen AP und bringen die AP in eine „sinnvolle“ Reihenfolge (Vorgänger/Nachfolgerliste).
Hinweis: Siehe Baustein „Projektmanagement“, bzw. „Wirtschaft- und Geschäftsprozesse“, Kapitel 2.1.3 Projektmanagement).

Die Projektdokumentation beschreibt Ihr Projekt, begründet das Vorgehen, den entwickelten und verwendeten Algorhytmen sowie der realisierten Lösung.  Planen Sie hier für ca. 10% (bis maximal 15%) der Projektdauer ein. Vorgabe der IHK! Verwenden Sie hier ggf. die üblichen Visualisierungstechniken (PAP, UML, NS). Siehe Bausteine OSE1 und UML).

Vorgaben
Erstellen Sie auf den Webserver (htdocs) ein Verzeichnis mit den Namen
	blog_nachname
und speichern hier alle für das Projekt notwendigen Skripte. Wählen Sie eine geeignete Verzeichnisstruktur aus.
Allgemeine Dokumente zum Projekt (z.B. Projektantrag oder Zeichnungen) speichern Sie bitte unter
	blog_nachname/dokumente

Übertragen Sie täglich (mindesten zu besprochen Zeiten) Ihre Lösung unter Teams.
 
Aufbau der Seiten, Gestaltungsraster, Informations- und Navigationsarchitektur

Entwickeln Sie den allgemeinen Aufbau Ihrer Webseiten für den gesamten Blog. Entwickeln Sie ein Gestaltungsraster wie Sie Ihre Seiten (grundsätzlich) aufbauen wollen. Überlegen Sie wie und wo die Informationen angezeigt werden sollen und wie der Benutzer durch die Informationen navigieren kann („Verlinkung“).
Finden Sie heraus, welche „Bereiche“ und Funktionen auf allen Seiten verfügbar sein müssen/sollen und strukturieren Sie Ihre „Masterpage“ („Vorlage“) entsprechend. Lagern Sie diese Bereiche/Funktionen entsprechend aus und binden Sie an den gewünschten Stellen der „Masterpage“ ein.

Allgemeine Vorgaben zu den Webseiten

Die Webseiten (alle) müssen nachfolgenden Anforderung erfüllen:
•	Der HTML-Aufbau muss sowohl semantisch als auch von der Syntax einwandfrei sein. (siehe HCJ1, Kapitel 4.1 HTML-Elemente für Seitenstrukturierung)

•	Der W3C-Validator darf keine Fehler (ERROR) anzeigen.

•	Die Seite sollen mindesten nachfolgende Bereiche enthalten:

o	Kopfbereich der Seite
Einfügung in die Seite mit eine (freien) Logo 

o	Topnavigation
(Haupt-) Möglichkeiten der Navigation durch die Website, abhängig ob Blogger oder Benutzer.

o	Contentbereich
Der Bereich der Seite in dem der „wesentliche Inhalt“ der jeweiligen Seite angezeigt wird.

o	Optional
Falls ein mehrspaltiges Layout erstellt wird, entsprechenden Aufbau (z.B. aside)

o	Fußbereich
Abschluss der jeweiligen Seite mit einer Metanavigation zur Datenschutzerklärung (wird zur Verfügung gestellt) und zu einem selbst zu erstellenden Impressum für eine private Person (Siehe: Recht).

•	Da auf der gesamten Website Cookies/Sessions benutzt werden müssen (Userverwaltung, Blogger/Benutzer) muss eine „Cookie Consent“ - Meldung ausgegeben werden und bestätigt werden können (Siehe Cookie Consent).

Responsive Webdesign

Das Seitenlayout muss mindestens neben einer Desktopansicht ein Layout für ein Smartphone enthalten. Optional können Sie auch Layouts für mehrere Auflösungen erstellen (Siehe: HCJ2, 13 Responsive Layouts mit CSS erstellen)
Hier ein einfaches Beispiel für ein Desktop-Layout und ein Smartphone-Layout (Kopf- und Topnavigation, hier mit „Burgermenü“). Natürlich ist eine freie Gestaltung möglich.

Desktop
 
 
Smartphone
 

Optische Gestaltung mit CSS
Verwenden Sie eine „ansprechende“ und ordentliche Gestaltung Ihrer Webseiten. Selbstverständlich lässt sich über Geschmack streiten . Selbstverständlich muss das CSS nach W3C valide sein.

JavaScript
Es steht Ihnen frei JavaScript überall da zu verwenden, wo es für Ihre Funktionalität geeignet und sinnvoll ist. Z.B. Ein- und Ausblende der Topnavigation im Smartphone-Layout.

Speichern der Blog-Beiträge
Es steht Ihnen frei wie Sie die erstellten Blog-Beiträge dauerhaft speichern. Egal ob als Textdatei, CSV, XML, serialisiert oder als SQL-Datenbank. Wählen Sie ein geeignetes Verfahren.

Attribute eines Blogs-Beitrags
Jeder Blog-Beitrag soll (mindesten) nachfolgende Attribute enthalten:
•	Titel (Text, max. 60 Zeichen)
•	Inhalt (Text, beliebig lang)
•	Erstellungsdatum
•	Anzeige (bool), gibt an, ob der Blog-Beitrag für den Benutzer angezeigt werden soll oder nicht. Z.B. der Beitrag ist noch nicht fertig erstellt, dann soll er für den Benutzer noch nicht angezeigt werden können.
•	Bewertung. Ein Blog-Beitrag soll von Benutzern mit 1 bis 5 „Sternen“ bewertet werden können. Hier soll gespeichert werden, wie häufig und mit welchem Durchschnitt der Beitrag bewertet wurde.
•	Anzahl, wie häufig wurde der Beitrag von Benutzern aufgerufen und angezeigt.

Seiten und geforderte Funktionalitäten des Blogs (Website)

1.	Topmenü

Das Topmenü soll sich entsprechend der Möglichkeiten im Kontext anpassen. Z.B.: Ist der Blogger nicht angemeldet, soll er sich über das Topmenü anmelden können, ist er angemeldet, soll er sich über das Topmenü abmelden können. Frei Wahl/Entscheidung.

2.	Startseite

Die Startseite soll eine Information über den Blog bieten (was dort zu erwarten ist), mindestens einen aktuellen Blogbeitrag in „Kurzform“ anzeigen und einen Link in den (eigentlichen Blog) bieten. Optional: Falls mehrere Blogs angeboten werden, eine Auswahl der Blogs anzeigen und in den jeweiligen Themenbereich „verlinken“.

3.	An- und Abmeldungen als Blogger

Über ein Anmeldeformular soll sich der Blogger als Inhaber authentifizieren. Dazu wird der Benutzername und das Passwort eingeben, welches „gehasht“ vorliegt. (siehe: Password-Hash). Ist der Blogger angemeldet kann er sich jederzeit wieder abmelden.

•	Funktionen des Bloggers

Dem Blogger werden nachfolgende Funktionen/Operation zur Verfügung gestellt:

Neuen Blog-Beitrag erstellen
Blog-Beitrag bearbeiten
Blog-Beitrag löschen
Blog-Beitrag sperren (wird nicht mehr für Benutzer angezeigt)
Blog-Beitrag freigeben (einen gesperrten Beitrag für die Anzeige freigeben)


4.	Übersichtsseite der Blog-Beiträge

Auf der Übersichtsseite zum (gewählten) Blog soll eine kurze Information zum jeweiligen Blog-Beitrag aufgelistet werden. Von hier aus kann der Benutzer oder Blogger den jeweiligen Beitrag aufrufen und vollständig im Detail angezeigt bekommen (Link). Ein gesperrter Beitrag darf nicht von einem Benutzer aufgerufen werden. Ggf. stehen hier dem Blogger mehr und weiterführende Aktionen zur Verfügung (abhängig von Ihrer Navigationsarchitektur).

5.	Detailseite des Blog-Beitrags

Anzeigen des Blog-Beitrags im vollen Umfang mit allen Daten. Zusätzlich soll der Benutzer die Möglichkeit erhalten den Beitrag mit „Sternen“ zu bewerten. Es soll „gezählt“ und angezeigt werden, wie häufig der Beitrag bereits aufgerufen wurde, wie oft er und mit welchem Durchschnitt er bewertet wurde. Ggf. stehen hier dem Blogger mehr und weiterführende Aktionen zur Verfügung (abhängig von Ihrer Navigationsarchitektur).

6.	Einen Webservice  anbieten

Bieten Sie Ihren Freunden oder Partnern die Möglichkeit an auf deren eigenen Seiten Beiträge aus Ihrem Blog einzubinden. Erstellen Sie dazu einen Webservice (REST oder SOAP, freie Wahl) und „senden“ einen HTML-Snippets mit dem Titel, einer Kurzform des Inhalt (ca. 100 Zeichen) und einen Link auf die Detailseite Ihres Blog-Beitrags 

 
Hinweise und Tipps

•	Nehmen Sie sich ausreichend Zeit um die Informations- und Navigation-Architektur zu planen, zu erarbeiten und ggf. zu testen. 

•	Nehmen Sie sich Zeit das „Look and Feel“ und das UI zu planen. Erstellen Sie eine Masterpage (vorlage) mit dem Sie die Forderungen erfüllen können.

•	Wo und an welcher Stellen wollen Sie die Operationen einbinden? Z.B. das Sperren eines Beitrags auf der Übersichtsseite oder auf der Detailseite.

•	Überdenken und entwickeln Sie das Einbinden von Include-Dateien. Welche brauche ich immer oder häufiger?

•	Realisieren Sie die PHP Lösung (weitestgehend) objektorientiert.

•	Gehen Sie von „klein“ nach „groß“; von „einfach“ zu „kompliziert“. Lösen Sie erst das geforderte, dann kann es weiter gehen 

•	Reduzieren Sie zu nächst den CSS Anteil auf das wesentliche und notwendige. Vermeiden Sie weitestgehend inline CSS. „Hübsch“ machen kann man dann immer noch (wenn die Zeit reicht). 

![image](https://github.com/MohsenDarabi/studieFall/assets/38433815/e58ef615-d5f4-42f4-b340-6a41020b3b84)
