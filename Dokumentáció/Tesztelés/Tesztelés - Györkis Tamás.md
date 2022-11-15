# Alfa tesztelés

## **Tesztelés dátuma:** 2022.11.15
### Bejelentkezés / regisztráció tesztelése

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_001 | Regisztráció esetén mezők hiányos kitöltése. | Az oldal figyelmeztet a hiányosságokra. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_002 | Regisztráció már létező e-mail címmel | Nem történik meg a regisztráció. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_003 | Regisztráció nem megyegyező jelszóval | Nem történik meg a regisztráció, jelzi az oldal a hibát. | Megyegyezik a várt eredménnyel | Nem találtam hibát. |
| GYT_004 | Bejelentkezés megfelelő adatokkal. | Megtörténik a bejelentkezés. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_005 | Bejelentkezés hibás adatokkal. | Nem történik meg a bejelentkezés, hibás adatok jelzése. | Megegyezik a várt eredménnyel. | Nem találtam hibát. | 

### Visszajelzés küldés / megtekintés tesztelése

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_006 | Visszajelzés űrlap kitöltése hiányosan. | Nem történik meg a visszajelzés elküldése. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_007 | Visszajelzés űrlap helyes kitöltése. | A visszajelzés elküldésre kerül. | Megyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_008 | Visszajelzés elérése bejelentkezés nélkül. | Átirányít az oldal a bejelentkezésre. | Megtörténik az átírányítás. | Nem találtam hibát. |
| GYT_009 | Visszajelzések megtekintése admin esetén. | Megjelennek a visszajelzések. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_010 | Visszajelzések megtekintése egyszerű felhasználó esetén. | Nincs jogosultság üzenet megjelenítése. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_011 | Visszajelzés megjelölése olvasottként. | A visszajelzés meg lesz jelölve olvasottként. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |