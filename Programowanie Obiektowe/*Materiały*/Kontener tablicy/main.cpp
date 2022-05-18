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

// Sortowanie vectora

vector<int> liczby {4,2,3,8,1};
sort(liczby.begin(),liczby.end());
for (int a:liczby){
    cout << a << " ";
}

// Pętla zakresowa

vector<int> liczby {1,2,3};

for (int a:liczby){
    cout << a << " ";
}
cout << endl;

liczby.push_back(4);

for (int a:liczby){
    cout << a << " ";
}
