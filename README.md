# Salon Fryzjerski - Projekt inżynierii internetowej
Maksym Kryskiv,Bohdan Krasnitskyi, Iryna Kravchuk

## Opis projektu
Prosty system do zarządzania rezerwacjami w salonie fryzjerskim.  
Umożliwia rejestrację użytkowników, logowanie oraz dokonywanie rezerwacji wybranych usług.

---

## Instrukcja uruchomienia

### 1. Instalacja i uruchomienie XAMPP
- Pobierz i zainstaluj XAMPP: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)  
- Uruchom XAMPP Control Panel  
- Włącz moduły **Apache** i **MySQL** (kliknij Start)

### 2. Umieszczenie projektu
- Skopiuj folder projektu (np. `projekt-fryzjer`) do katalogu:  
  `C:\xampp\htdocs\`

### 3. Import bazy danych
- Wejdź na [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
- Utwórz nową bazę danych o nazwie `fryzjer`  
- Przejdź do zakładki **Import**  
- Wybierz plik SQL (`baza.sql`) z folderu projektu  
- Kliknij **Wykonaj**

### 4. Konfiguracja połączenia z bazą danych
- Otwórz plik `db.php`  
- Sprawdź, czy parametry połączenia zgadzają się z Twoją bazą:

```php
$host = 'localhost';  
$db = 'fryzjer';  
$user = 'root';  
$pass = '';  
