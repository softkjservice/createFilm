<p><h2>O projekcie</h2></p>

    <p><h4> Larevel, PHP, JavaScript</h4></p>
    <p><b>Podstawowe funkcjonalności</b></p>

- Rejestracja użutkowników z potwierdzeniem e-mailowym
- Logowanie z rozróżnieniem uprawnień<br>
####Funkcjonalności dostępne dla użytkownika:
- Kreator nowego zamówienia
  - Edycja tytułu albumu oraz subtytułu i tekstu końcowego
  - Wybór animacji dla tytułu, przenikania obrazów oraz tekstu końcowego z natychmiastowym podglądem efektu
  - Dodawanie zdjęć z opisem
  - Zarządzanie zdjęciami: 
    -  Ustalanie kolejności (przesuwanie góra/dół)
    - Usuwanie
  - Podsumowanie zamówienia z automatycznym wyliczeniem kwoty w zależności od objętości albumu
  - Zatwierdzanie zamówienia lub powrót do edycji
- Po zatwierdzeniu automatyczne przesłanie zamówienia na e-mail klienta oraz administratora
- Zarządzanie zamówieniami, które nie zostały jeszcze przesunięte do realizacji
###Funkcjonalności dostępne dla administratora
- Dostęp do wszystkich zamówień z możliwością wydzielenia zamówień do realizacji
- Pobieranie plików do albumu
  - Format ZIP
  - W nazwie pliku automatycznie generujący się numer określający kolejność zdjęcia w albumie
###Uwagi
- Walidacja z wykorzystaniem FormRequest
- Role w systemie predefiniowane [enum]
- Surowa szata graficzne
- Brak testów

