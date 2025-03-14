# Aufgabe Parkhaus (Zusatzaufgabe)
Für ein Unternehmen, welches Parkhäuser verwaltet,
soll eine Software für Abrechnung, Tickets und Organisation
des Parkens im Parkhaus entwickelt werden.
Dabei soll schon bei der Einfahrt die Parkplatzwahl erleichtert
werden. Sie gehören zum Entwicklerteam und
sind an der Entwicklung beteiligt.

- [x] a) .. UML Klassendiagramm

- [ ] b) Beim Erzeugen eines Objektes der Klasse „Parkhaus“ sollen alle Plätze im Parkhaus auf unbesetzt (=FALSE) gesetzt werden. Diese Information wird in dem 2-dimensionalen Array Parkplaetze abgelegt. Dabei beschreibt die 1. Dimension die Ebene und die 2. Dimensionen die Parkplätze. (Hinweis: eine genaue Zuordnung auf den Ebenen ist nicht erforderlich. Es genügt, wenn nur bekannt ist, dass es eine An-zahl an Parkplätzen auf einer Ebene gibt und welche besetzt bzw. frei sind).

> [!TIP]
> **Der Aufbau des Array**:
> [ [FALSE,FALSE,FALSE,FALSE],[FALSE,FALE,TRUE, …], …]


- [ ] c)	Es soll nun noch möglich sein, dass ein Parkplatz auf einer Ebene als belegt zu mar-kieren. Dafür muss eine Methode programmiert werden, die die Ebene und den Parkplatz auf der Ebene übergeben bekommt und diesen dann von frei auf belegt setzt (von FALSE auf TRUE). Es ist der Parkplatz bereits belegt wird False zurückge-geben, bei einer erfolgreichen Belegung wird True zurückgegeben. Nehmen Sie die Methode ins Klassendiagramm auf.

    ```
    public method parkplatzBelegt (ebene : int, parkplatz : int) : boolean {
    	…
    };
    ```
- [ ] d)	Um den Verkehr besser zu steuern, soll es der Parkhausverwaltung auch möglich sein ganze Ebenen zu sperren. Auch hierfür muss eine Methode implementiert wer-den, die die Ebene übergeben bekommt und dann alle Plätze auf belegt setzt (TRUE). Es muss nicht berücksichtigt werden, ob der Platz bereits belegt ist. Neh-men Sie die Methode ins Klassendiagramm auf.
    ```
    public method sperreEbene (ebene : int) : void {
    	…
    };
    ```
- [ ] e)	Es soll nun auch noch möglich sein, dass der nächstbeste Parkplatz auf einer be-stimmten Ebene belegt werden kann. Dabei wird bei Erfolg True zurückgegeben und sollte bereits alle Parkplätze der Ebene belegt sein False.
      ```
      public method parkplatzBelegtEbene(eben : int) : boolean {
	    …
      };
      ```


