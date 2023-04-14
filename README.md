<p><h2>O projekcie</h2></p>
<p><h4>Technologia Larevel, PHP, JavaScript</h4></p>
<p><h3>Cel projektu</h3></p>
Opracowanie w pełni użytkowej aplikacji do obsługi zamówień. Obiektem zamówienia jest album zdjęciowy, którego projekt tworzy użytkownik. Kreator albumu pozwala wprowadzać wymagane teksty oraz zdjęcia z możliwością natychmiastowego podglądu wybranych efektów animacyjnych. Projekt utworzony w celach szkoleniowych. Front-end powstał w oparciu o pliki blade w wykorzystaniem css oraz js. Back-end wykorzystuje PHP 8 oraz MySQL. Wersjonowanie projektu realizowane w oparciu o oprogramowanie GIT. Projekt zainstalowany został na serwerze współdzielonym.
<p><b>Podstawowe funkcjonalności</b></p>

- [Simple, fast routing engine](https://laravel.com/docs/routing).

- Rejestracja użutkowników z potwierdzeniem e-mailowym
- Logowanie z rozróżnieniem uprawnień<br>
<p><b>Funkcjonalności dostępne dla użytkownika:</b></p>

- Kreator nowego zamówienia
  - Edycja tytułu albumu oraz subtytułu i tekstu końcowego
  - Wybór animacji dla tytułu, przenikania obrazów oraz tekstu końcowego z natychmiastowym podglądem efektu
   - Dodawanie zdjęć z opisem
   - Zarządzanie zdjęciami: 
     - Ustalanie kolejności (przesuwanie góra/dół)
     - Usuwanie
  - Podsumowanie zamówienia z automatycznym wyliczeniem kwoty w zależności od objętości albumu
  - Zatwierdzanie zamówienia lub powrót do edycji
- Po zatwierdzeniu automatyczne przesłanie zamówienia na e-mail klienta oraz administratora
- Zarządzanie zamówieniami, które nie zostały jeszcze przesunięte do realizacji
<p><b>Funkcjonalności dostępne dla administratora</b></P>

- Dostęp do wszystkich zamówień z możliwością wydzielenia zamówień do realizacji
- Pobieranie plików do albumu
  - Format ZIP
  - W nazwie pliku automatycznie generujący się numer określający kolejność zdjęcia w albumie
<p><b>Uwagi</b></p>
    
- Walidacja z wykorzystaniem FormRequest
- Role w systemie predefiniowane [enum]
- Surowa szata graficzne
- Brak testów

