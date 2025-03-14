
<?php
class Parkhaus {
    private $parkhausNr;
    private $ebenen;
    private $plaetzeProEbene;
    private $parkplaetze;

    // Konstruktor
    public function __construct($parkhausNr, $ebenen, $plaetzeProEbene) {
        $this->parkhausNr = $parkhausNr;
        $this->ebenen = $ebenen;
        $this->plaetzeProEbene = $plaetzeProEbene;
        $this->parkplaetze = array();

        for ($i = 0; $i < $ebenen; $i++) {
            $reihe = array();
            for ($j = 0; $j < $plaetzeProEbene; $j++) {
                $reihe[] = false;
            }
            $this->parkplaetze[] = $reihe;
        }
    }

    // Getter für Parkhausnummer
    public function getParkhausNr() {
        return $this->parkhausNr;
    }

    // Belege einen spezifischen Platz auf einer Ebene
    public function parkplatzBelegt($ebene, $platz) {
        if (!$this->parkplaetze[$ebene][$platz]) {
            $this->parkplaetze[$ebene][$platz] = true;
            return true;
        } else {
            return false;
        }
    }

    // Sperre die ganze Ebene
    public function sperreEbene($ebene) {
        for ($i = 0; $i < count($this->parkplaetze[$ebene]); $i++) {
            $this->parkplaetze[$ebene][$i] = true;
        }
    }

    // Belege einen beliebigen Platz auf einer Ebene
    public function parkplatzBelegtEbene($ebene) {
        for ($i = 0; $i < count($this->parkplaetze[$ebene]); $i++) {
            if (!$this->parkplaetze[$ebene][$i]) {
                $this->parkplaetze[$ebene][$i] = true;
                return true;
            }
        }
        return false;
    }

    // Gebe nächsten freien Platz zurück
    public function zeigeNaechstenPlatz() {
        for ($i = 0; $i < count($this->parkplaetze); $i++) {
            for ($j = 0; $j < count($this->parkplaetze[$i]); $j++) {
                if (!$this->parkplaetze[$i][$j]) {
                    $this->parkplaetze[$i][$j] = true;
                    return array($i, $j);
                }
            }
        }
        return null; // Falls kein freier Platz vorhanden ist
    }
}
?>
