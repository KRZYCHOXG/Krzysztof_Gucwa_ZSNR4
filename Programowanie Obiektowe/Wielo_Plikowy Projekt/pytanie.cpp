#include "pytanie.h"
#include <iostream>
#include <fstream>
using namespace std;

void pytanie::wczytajPytanie() {
    fstream plik;
    plik.open("quiz.txt",ios::in|ios::out);
        if (plik.good()==0) cout << "Brak pliku..." << endl;


        string linia;
        int nrLinii = (nrPytania - 1) * 5 + 1;
        int licznik = 1;

        while(getline(plik,linia)) {
            if (licznik == nrLinii) trescPytania = linia;
            licznik++;

        }

    plik.close();
}

void pytanie::zadajPytanie() {
     cout << trescPytania << endl;
}

void pytanie::sprawdz() {

}