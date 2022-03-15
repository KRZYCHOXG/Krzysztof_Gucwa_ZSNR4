class Komis {
    constructor(nazwa) {
        this.nazwa = nazwa;
        this.samochody = [];
    }
    dodajSamochod(auto) {
        this.samochody.push(auto);
    }
    wyswietlSamochody() {
        const div = document.querySelector('div');
        //div.innerHTML = `<div> ${this.samochody[0]} </div>`;
        this.samochody.forEach(auto=>{
            div.innerHTML += `<hr>`;
            div.innerHTML += `<p><i><h2>Marka</h2></i> <h4>${auto.marka}</h4></p>`;
            div.innerHTML += `<p><i><h2>Cena</h2></i> <h4>${auto.cena} zł</h4> </p>`;
            div.innerHTML += `<p><i><h2>Model</h2></i> <h4>${auto.model}</h4></p>`;
            div.innerHTML += `<p><i><h2>Spalanie</h2></i> <h4>${auto.spalanie} litrów</h4></p>`;
            div.innerHTML += `<hr>`;
        })
    }
}