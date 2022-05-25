#ifndef CZLOWIEK_H
#define CZLOWIEK_H

class czlowiek
    {
        std::using namespace;
    public:
        string imie;
        string nazwisko;
        string numer;
        czlowiek( string ximie, string xnazwisko, string xnumer ): imie( ximie )
                , nazwisko( xnazwisko )
                , numer( xnumer ){};
                private:
    };

#endif // CZLOWIEK_H
