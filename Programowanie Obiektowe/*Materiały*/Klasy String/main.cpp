#include <iostream>
#include <algorithm>
using namespace std;

int main()
{
    cout << "Podaj Imie tutaj ";
        string im;
    cin >> im;
    cout << "Wpisz Nazwisko: ";
        string naz;
    cin >> naz;

    string popA = "Przeszlo -";
    string popB = " Dziekuje";
    string popC = popA+" " +popB;
    transform(popC.begin(), popC.end(), popC.begin(), ::toupper);
        cout << popC << endl;


        string email = im.substr(0,3);
    string emailn = naz.substr(0,3);
    transform(email.begin(),email.end(), email.begin(), ::tolower);
    transform(emailn.begin(),emailn.end(), emailn.begin(), ::tolower);

    cout << "" << endl;
    cout << "Email to: " << email+emailn + "@zsnr4.net" << endl;


    return 0;
}
