// Przykład wykorzystania
// https://pl.wikipedia.org/wiki/This_(programowanie_obiektowe)

#include <iostream>
using namespace std;

class Osoba{
    string nazwisko;
    string imie;
    int wiek;
public:
    void ustawDane(string nazwisko, string imie, int wiek){
        this->nazwisko = nazwisko;
        this->imie = imie;
        this-> wiek = wiek;
    }
    void wypiszDane();
};

void Osoba::wypiszDane() {
    cout << "Nazwisko: " << nazwisko << endl;
    cout << "Imie: " << imie << endl;
    cout << "Wiek: " << wiek << endl;
}


int main() {
 Osoba *uczen1 = new Osoba;
 uczen1->ustawDane("Nowak", "Pawel", 17);
 uczen1->wypiszDane();
 delete uczen1;
}
