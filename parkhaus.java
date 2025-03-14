public class Parkhaus {
    private int parkhausNr;
    private int ebenen;
    private int plaetzeProEbene;
    private boolean[][] parkplaetze;

    // Konstruktor
    public Parkhaus(int parkhausNr, int ebenen, int plaetzeProEbene) {
        this.parkhausNr = parkhausNr;
        this.ebenen = ebenen;
        this.plaetzeProEbene = plaetzeProEbene;
        this.parkplaetze = new boolean[ebenen][plaetzeProEbene];

        for (int i = 0; i < ebenen; i++) {
            for (int j = 0; j < plaetzeProEbene; j++) {
                parkplaetze[i][j] = false;
            }
        }
    }

    // Getter für Parkhausnummer
    public int getParkhausNr() {
        return parkhausNr;
    }

    // Belege einen spezifischen Platz auf einer Ebene
    public boolean parkplatzBelegt(int ebene, int platz) {
        if (!parkplaetze[ebene][platz]) {
            parkplaetze[ebene][platz] = true;
            return true;
        } else {
            return false;
        }
    }

    // Sperre die ganze Ebene
    public void sperreEbene(int ebene) {
        for (int i = 0; i < parkplaetze[ebene].length; i++) {
            parkplaetze[ebene][i] = true;
        }
    }

    // Belege einen beliebigen Platz auf einer Ebene
    public boolean parkplatzBelegtEbene(int ebene) {
        for (int i = 0; i < parkplaetze[ebene].length; i++) {
            if (!parkplaetze[ebene][i]) {
                parkplaetze[ebene][i] = true;
                return true;
            }
        }
        return false;
    }

    // Gebe nächsten freien Platz zurück
    public int[] zeigeNaechstenPlatz() {
        int[] freierPlatz = new int[2];
        for (int i = 0; i < parkplaetze.length; i++) {
            for (int j = 0; j < parkplaetze[i].length; j++) {
                if (!parkplaetze[i][j]) {
                    parkplaetze[i][j] = true;
                    freierPlatz[0] = i;
                    freierPlatz[1] = j;
                    return freierPlatz;
                }
            }
        }
        return null; // Falls kein freier Platz vorhanden ist
    }
}
