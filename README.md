# Aufgabe Parkhaus (Zusatzaufgabe)
Für ein Unternehmen, welches Parkhäuser verwaltet,
soll eine Software für Abrechnung, Tickets und Organisation
des Parkens im Parkhaus entwickelt werden.
Dabei soll schon bei der Einfahrt die Parkplatzwahl erleichtert
werden. Sie gehören zum Entwicklerteam und
sind an der Entwicklung beteiligt.

- [x] a) .. UML Klassendiagramm

- [ ] b) Beim Erzeugen eines Objektes der Klasse „Parkhaus“ sollen alle Plätze im Parkhaus auf unbesetzt (=FALSE) gesetzt werden. Diese Information wird in dem 2-dimensionalen Array Parkplaetze abgelegt. Dabei beschreibt die 1. Dimension die Ebene und die 2. Dimensionen die Parkplätze. (Hinweis: eine genaue Zuordnung auf den Ebenen ist nicht erforderlich. Es genügt, wenn nur bekannt ist, dass es eine An-zahl an Parkplätzen auf einer Ebene gibt und welche besetzt bzw. frei sind).

> [!IMPORTANT]
> **Der Aufbau des Array**:
> [ [FALSE,FALSE,FALSE,FALSE],[FALSE,FALE,FALSE, …], …]


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
- [ ] f)	Um eine bessere Auslastung und Verteilung im Parkhaus zu ermöglichen, soll es auch eine Methode geben, bei der gleich bei der Einfahrt eine Empfehlung für eine Ebene und einen freien Parkplatz gibt. Dabei wird geprüft welches die nächste Ebe-ne ist, bei der noch Plätze frei sind. Die Methode gibt dann eine Liste zurück bei der das erste Element die Ebene angibt und das zweite Elemente den Parkplatz. Neh-men Sie die Methode ins Klassendiagramm auf.

> [!IMPORTANT]
> **Beispiel**:
> -	Ebene 0 ist voll und auch Ebene 1 hat keinen freien Platz (alle TRUE). 
> -	Ebene 2 hat noch freie Plätze (FALSE). Und zwar gleich den ersten Parkplatz (0) 
> -	Es wird eine Liste zurückgegeben: [2,0]

```
public method zeigeNaechstenPlatz () : List<int> {
		…
};
```

## Optionale Vertiefung
> [!TIP]
>** Falls Ihnen die Aufgaben zu einfach sind, sind hier noch ein paar Anregungen die Aufgabe insgesamt interessanter zu machen. **
> -	Bauen Sie für die Belegung noch einen Timestamp ein. Diese muss auch in dem mehrdimensionalen Array ableget werden. Passen sie den gesamten Code auf diesen ergänzenden Sachverhalt an.
> -	Erhöhen Sie die Komplexität, indem Sie die Ebene selbst mit einem Raster ver-sehen. Passen Sie die Dimensionen an und alle Methoden. 
> -	Optimieren Sie die Belegung, dass nicht nur der Timestamp für das Parken er-fasst wird, sondern auch eine maximale Parkdauer. So können Plätze in zeitli-chen Abhängigkeiten auch reserviert werden. (Beispiel: Parkplatz noch 63 Minu-ten belegt, danach gleich wieder reserviert durch anderen Kunden).

## Noch tiefere Vertiefung
>[!Caution]
> **Achtung! Noch nicht im Unterricht behandelt!**
> Erweitern Sie das Programm, indem die Parkplätze selbst eine Klasse sind und bauen Sie eine Objektreferent mittels mehrdimensionalen Arrays auf. Geben Sie den Parkplätzen passende Eigenschaften. Die Zuordnung auf Ebenen erfolgt al-lerdings in der Klasse Parkhaus. 
