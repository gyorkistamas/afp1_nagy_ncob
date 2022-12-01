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

# Végleges tesztelés

## **Tesztelés dátuma:** 2022.12.01

### Új feladvány feltöltésének tesztelése

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_021 | Új feladvány helyes kitöltése. | A feladvány bekerül az adatbázisba. | A feltöltés sikeres. | Nem találtam hibát. |
| GYT_022 | Kép nincs kiválasztva feladvány feltöltésekor. | A hibára figyelmeztet az oldal. | A hibajelzés megtörténik. | Nem találtam hibát. |
| GYT_023 | Nincsen megadva megoldás a feladványhoz. | A feladvány nem kerül feltöltésre. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_024 | Új fealdvány felvitelekor minden mező üres. | A hibákat jelzi az oldal. | Nem történik meg a feltöltés, a hibák láthatók. | Nem találtam hibát. |

### Felhasználók kezelésének tesztelése
| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_025 | Felhasználó kitiltása az oldalról. | A kitiltott felhasználó nem tud bejelentkezni. | Nem történik meg a bejelentkezés. | A funkció megfelelően működik. |
| GYT_026 | Felhasználó kinevezés adminisztrátorrá. | A felhasználó adminisztrátori jogokat kap. | Megkapja a jogokat a felhasználó. | Megfelelően működik. |
| GYT_027 | Másik profil megtekintése. | A profil megtekintése gombra kattintva megjelenik a kiválasztott felhasználó profilja, statisztikája. | Az adatok megjelenítése megtörténik. | Nem találtam hibát. |

### Új játék tesztelése
| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_028 | Új játék gombra kattintva elindul a játék. | A gombra kattintva megkérdezi az oldal, hogy hány feladványt szeretne a felhasználó. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_029 | Túl nagy méretű szám megadása feladványok számának kiválasztásánál. | A hibára figyelmeztet az oldal, a játék nem folytatódik, amíg az érték javításra nem kerül. | A hiba jelzésre kerül a felhasználó számára. | Nem találtam hibát. |
| GYT_030 | Megfelelő feladványszám megadása | A játék elindul. | Ténylegesen lekezdődik a játék. | Nem találtam hibát. |
| GYT_031 | Tipp mező üresen hagyása. | Az oldal nem neged tovább a következő feladványra. | A kitöltésre felszólító hiba jelzésre kerül, a játékos nem kerül át a következő feladványra. | Nem találtam hibát. |
| GYT_032 | A passz gomb tovább viszi a játékot. | A passz gombbal a játékos a következő feladványra kerül. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_033 | Az utolsó feladvány után a statisztika megjelenítése. | Az utolsó feladvány próbálkozása után a felhasználó láthatja a statisztikát a játékról. | A helyes statisztika megjelenik. | Nem találtam hibát. |