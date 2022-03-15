class Samochod {
    constructor(marka, model, cena, rocznik, spalanie) {
        this.marka = marka;
        this.model = model;
        this.cena = cena;
        this.rocznik = rocznik;
        this.spalanie = spalanie;
    } 
    wiek() {
        const data = new Date();
        const rok = data.getFullYear();
        return 'Wiek samochodu wynosi -> ' + (rok - this.rocznik) + ' Lat';   
    }
    koszt() {
        const koszt = 7.65;
        return 'Cena za diesel za 100km przejechania tym samochodem wynosi -> ' + (koszt*this.spalanie) + ' zł';   
    }
}