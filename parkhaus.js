
class Parkhaus {
    constructor(parkhausNr, ebenen, plaetzeProEbene) {
        this.parkhausNr = parkhausNr;
        this.ebenen = ebenen;
        this.plaetzeProEbene = plaetzeProEbene;
        this.parkplaetze = [];

        for (let i = 0; i < ebenen; i++) {
            let reihe = [];
            for (let j = 0; j < plaetzeProEbene; j++) {
                reihe.push(false);
            }
            this.parkplaetze.push(reihe);
        }
    }

    // Getter für Parkhausnummer
    getParkhausNr() {
        return this.parkhausNr;
    }

    // Belege einen spezifischen Platz auf einer Ebene
    parkplatzBelegt(ebene, platz) {
        if (!this.parkplaetze[ebene][platz]) {
            this.parkplaetze[ebene][platz] = true;
            return true;
        } else {
            return false;
        }
    }

    // Sperre die ganze Ebene
    sperreEbene(ebene) {
        for (let i = 0; i < this.parkplaetze[ebene].length; i++) {
            this.parkplaetze[ebene][i] = true;
        }
    }

    // Belege einen beliebigen Platz auf einer Ebene
    parkplatzBelegtEbene(ebene) {
        for (let i = 0; i < this.parkplaetze[ebene].length; i++) {
            if (!this.parkplaetze[ebene][i]) {
                this.parkplaetze[ebene][i] = true;
                return true;
            }
        }
        return false;
    }

    // Gebe nächsten freien Platz zurück
    zeigeNaechstenPlatz() {
        for (let i = 0; i < this.parkplaetze.length; i++) {
            for (let j = 0; j < this.parkplaetze[i].length; j++) {
                if (!this.parkplaetze[i][j]) {
                    this.parkplaetze[i][j] = true;
                    return [i, j];
                }
            }
        }
        return null; // Falls kein freier Platz vorhanden ist
    }
}
