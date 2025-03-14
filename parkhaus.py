class Parkhaus:
    # Konstruktor
    def __init__(self, parkhaus_nr, ebene, plaetze_pro_ebene):
        self.__parkhaus_nr = parkhaus_nr
        self.__ebenen = ebene
        self.__plaetze_pro_ebene = plaetze_pro_ebene
        self.__parkplaetze = []
          
        for x in range(self.__ebenen):
            reihe = []
            for y in range(self.__plaetze_pro_ebene):
                reihe.append(False)
            self.__parkplaetze.append(reihe)
    
    # Getter für Parkhausnummer
    def getParkhausNr(self):
        return self.__parkhaus_nr

    # Belege einen spezifischen Patz auf einer Ebene
    def parkplatzBelegt(self,ebene,platz):
        if self.__parkplaetze[ebene][platz] == False:
            self.__parkplaetze[ebene][platz] = True
            return True
        else:
            return False
    
    # Sperre die ganze Ebene  
    def sperreEbene(self,ebene):
        for i in range(len(self.__parkplaetze[ebene])):
            self.__parkplaetze[ebene][i] = True

    #Belge einen beliebigen Platz auf einer Ebene
    def parkplatzBelegtEbene(self,ebene):
        for i in range(len(self.__parkplaetze[ebene])):
            if self.__parkplaetze[ebene][i] == False:
                self.__parkplaetze[ebene][i] = True
                return True
                break
        return False

    # Gebe nächsten freien Platz zurück
    def zeigeNaechstenPlatz(self):
        freierPlatz = []
        for i in range(len(self.__parkplaetze)):
            for j in range(len(self.__parkplaetze[i])):
                if self.__parkplaetze[i][j] == False:
                    self.__parkplaetze[i][j] = True
                    freierPlatz.append(i)
                    freierPlatz.append(j)
                    break
            break
        return freierPlatz
