#include "pytanie.h"

using namespace std;

int main()
{
    pytanie p1;
    p1.nrPytania = 1;
    p1.wczytajPytanie();
    p1.zadajPytanie();

    pytanie p2;
    p2.nrPytania = 2;
    p2.wczytajPytanie();
    p2.zadajPytanie();
    return 0;
}
