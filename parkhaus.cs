
public class Parkhaus
{
    private int parkhausNr;
    private int ebenen;
    private int plaetzeProEbene;
    private bool[,] parkplaetze;

    // Konstruktor
    public Parkhaus(int parkhausNr, int ebenen, int plaetzeProEbene)
    {
        this.parkhausNr = parkhausNr;
        this.ebenen = ebenen;
        this.plaetzeProEbene = plaetzeProEbene;
        this.parkplaetze = new bool[ebenen, plaetzeProEbene];

        for (int i = 0; i < ebenen; i++)
        {
            for (int j = 0; j < plaetzeProEbene; j++)
            {
                parkplaetze[i, j] = false;
            }
        }
    }

    // Getter für Parkhausnummer
    public int GetParkhausNr()
    {
        return parkhausNr;
    }

    // Belege einen spezifischen Platz auf einer Ebene
    public bool ParkplatzBelegt(int ebene, int platz)
    {
        if (!parkplaetze[ebene, platz])
        {
            parkplaetze[ebene, platz] = true;
            return true;
        }
        else
        {
            return false;
        }
    }

    // Sperre die ganze Ebene
    public void SperreEbene(int ebene)
    {
        for (int i = 0; i < plaetzeProEbene; i++)
        {
            parkplaetze[ebene, i] = true;
        }
    }

    // Belege einen beliebigen Platz auf einer Ebene
    public bool ParkplatzBelegtEbene(int ebene)
    {
        for (int i = 0; i < plaetzeProEbene; i++)
        {
            if (!parkplaetze[ebene, i])
            {
                parkplaetze[ebene, i] = true;
                return true;
            }
        }
        return false;
    }

    // Gebe nächsten freien Platz zurück
    public int[] ZeigeNaechstenPlatz()
    {
        for (int i = 0; i < ebenen; i++)
        {
            for (int j = 0; j < plaetzeProEbene; j++)
            {
                if (!parkplaetze[i, j])
                {
                    parkplaetze[i, j] = true;
                    return new int[] { i, j };
                }
            }
        }
        return null; // Falls kein freier Platz vorhanden ist
    }
}
