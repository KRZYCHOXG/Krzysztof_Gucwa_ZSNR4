// Przykład dodawania elementów na koniec kontenera

vector<int> liczby {1,2,3};

for (int i=0;i<liczby.size();i++ ){
    cout << liczby[i]<< endl;
}

cout << endl;

liczby.push_back(4);

for (int i=0;i<liczby.size();i++ ){
    cout << liczby[i]<< endl;
}
