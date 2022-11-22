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


# Béta tesztelés

## **Tesztelés dátuma:** 2022.11.22

### Felhasználói adatok frissítésének tesztelése

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_012 | Oldal elérése bejelentkezés nélkül. | Az oldal átirányít a bejelentkezéshez. | Az átirányítás megtörténik. | Nem találtam hibát. |
| GYT_013 | Felhasználó profilképének frissítése megfelelő méretű képpel. | A profilkép frissül. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_014 | Profilkép frissítése túl nagy méretű képpel. | A rendszer hibát jelez. | Megtörténik a hibajelzés. | Nem találtam hibát. |
| GYT_015 | Felhasználó nevének frissítése. | A név frissítésre kerül. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_016 | Felhasználó név mező üresen marad. | A mező kitöltésére felszólít az oldal. | Az üzenet megjelenik. | Nem találtam hibát. |
| GYT_017 | E-mail cím szerkesztése megfelelő bemenettel. | Az e-mail frissítésre kerül. | Az e-mail cím nem megfelelően frissül, fölösleges karakterek kerülnek a címbe. | Hibát találtam, javítva [commit](https://github.com/gyorkistamas/afp1_nagy_ncob/commit/d56a74b0f3cf610e85cc6ef55fab347091546afd)-ban. |
| GYT_018 | Már létező e-mail cím megadása frissítéskor. | A frissítés nem történik meg, a hibát jelzi az oldal. | Megtörténik a hibajelzés. | Nem találtam hibát. |
| GYT_019 | Jelszó frissítése megfelelő adatokkal. | A jelszó frissítésre kerül. | Frissül a felhasználó jelszava. | Nem találtam hibát. |
| GYT_020 | Jelszó és jelszó megerősítése nem egyezik meg. | Az oldal nem engedi a jelszó megváltoztatását, hibát jelez. | A hibajelzés megtörténik. | Nem találtam hibát. |