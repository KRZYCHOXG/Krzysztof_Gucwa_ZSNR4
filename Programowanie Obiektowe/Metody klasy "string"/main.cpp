#include <iostream>
#include <algorithm>
using namespace std;

int main()
{
    string wyraz;
    cout << "Podaj tekst: ";
    getline( cin, wyraz );
    cout << "Wprowadziles: \"" << wyraz << "\"" << endl;
    cout << "Dlugosc wyrazu: " << wyraz.length() << endl;

    string a = "Bardzo dobra";
    string b = "robota majster :)";
    string c = a+" " +b;
    transform(c.begin(), c.end(), c.begin(), ::toupper);
        cout << c << endl;

    string napis="Ala ma kota";
    string szukaj="kot";
    size_t pozycja=napis.find(szukaj);

        if (pozycja!=string::npos)
    cout<< "Znaleziono na pozycji: "<<pozycja;
    else cout<<"Nie znaleziono.";

    string mastering=" --- Ala kota o imieniu";
    mastering.insert(23, " ''Filemona''");
    mastering.replace(4,1, " Nie miala ");
    cout<<mastering;


    return 0;
}
