### Tesztelés ###

Dátum: 2022.01.01.

### Profil kezelés ###

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| T_01-1 | Regisztrációs kísérlet kitöltetlen mezővel | Sikeres regisztráció | Sikeres regisztráció  | Kitöltetlen mező: profil kép |
| T_01-2 | Regisztrációs kísérlet kitöltetlen mezővel | Meghiúsulás és figyelmeztetés | Az oldal figyelmeztet, a művelet sosem fut le | Kitöltetlen mező: név |
| T_01-3 | Regisztrációs kísérlet kitöltetlen mezővel | Meghiúsulás és figyelmeztetés | Az oldal figyelmeztet, a művelet sosem fut le | Kitöltetlen mező: email |
| T_01-4 | Regisztrációs kísérlet kitöltetlen mezővel | Meghiúsulás és figyelmeztetés | Az oldal figyelmeztet, a művelet sosem fut le | Kitöltetlen mező: jelszó-1 |
| T_01-5 | Regisztrációs kísérlet kitöltetlen mezővel | Meghiúsulás és figyelmeztetés | Az oldal figyelmeztet, a művelet sosem fut le | Kitöltetlen mező: jelszó-2 |
| T_02 | Regisztrációs kísérlet nem megegyező jelszavakkal | Meghiúsulás és figyelmeztetés | Az oldal önmagára irányít hiba üzenettel | |
| T_03 | Regisztrációs kísérlet | Sikeres regisztráció | Sikeres regisztráció | |
| T_04-1 | Bejelentkezési kísérlet hibás adatokkal | Meghiúsulás és figyelmeztetés | Meghiúsulás és figyelmeztetés | Hibás adat: név |
| T_04-2 | Bejelentkezési kísérlet hibás adatokkal | Meghiúsulás és figyelmeztetés | Meghiúsulás és figyelmeztetés | Hibás adat: jelszó |
| T_04 | Profil megtekintése | Sikeres regisztráció | Sikeres regisztráció | |

### Játék ###

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| T_05 | Játék kezdése gomb megnyomása | Átírányítás a játék beállításaihoz | Várt eredmény | |
| T_06-1 | Új játék elindításának kísérlete | Játék elindulása | Várt eredmény | Kérdés szám: 10 |
| T_06-2 | Új játék elindításának kísérlete | Meghiúsulás és figyelmeztetés | Az oldal intuitívan figyelmeztet, hogy a szám invalid | Kérdés szám: -10 |
| T_06-3 | Új játék elindításának kísérlete | Meghiúsulás és figyelmeztetés | Az oldal intuitívan figyelmeztet, hogy a szám túl nagy | Kérdés szám: 10000 |
| T_07-1 | Válaszadás kísérlet a "Beküldés" gombal | Meghiúsulás és figyelmeztetés | Az oldal intuitívan figyelmeztet, hogy valamit elfelejtettem | Input mező értéke: "" |
| T_07-2 | Válaszadás kísérlet a "Beküldés" gombal | Tovább engedés a következő kérdésre | Várt eredmény | Input mező értéke: "test" |
| T_07-3 | Válaszadás kísérlet a "Passz" gombal | Tovább engedés a következő kérdésre | Várt eredmény | Input mező értéke: "" |
| T_07-4 | Válaszadás kísérlet a "Passz" gombal | Tovább engedés a következő kérdésre | Várt eredmény | Input mező értéke: "test" |
| T_08-1 | Megfelelő válasz megadása | Találat számláló növekedése 1-el | Várt eredmény | Input: pontos kis/nagy betűk |
| T_08-2 | Megfelelő válasz megadása | Találat számláló növekedése 1-el | Várt eredmény | Input: csupa kis betű |
| T_08-3 | Megfelelő válasz megadása | Találat számláló növekedése 1-el | Várt eredmény | Input: csupa nagy betű |
| T_09 | Utolsó válasz megadása | Átírányítás a statisztikai lapra | Várt eredmény | |

### Visszajelzések ###

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| T_10 | Visszajelzések oldal betöltése bejelentkezés nélkül | Átírányítás a bejelentkezés oldalra | Várt eredmény | |
| T_11-1 | Visszajelzések küldési kísérlet kitöltetlen mezővel | Az oldal figyelmeztet, a művelet sosem fut le | Várt eredmény | Kitöltetlen mező: cím |
| T_11-2 | Visszajelzések küldési kísérlet kitöltetlen mezővel | Az oldal figyelmeztet, a művelet sosem fut le | Várt eredmény | Kitöltetlen mező: üzenet |
| T_12 | Visszajelzések küldési kísérlet | A művelet lefut és oldal értesít ennek sikerességéről | Várt eredmény | |
| T_13 | Visszajelzések listája oldal betöltése bejelentkezés nélkül | Átírányítás a bejelentkezés oldalra | Várt eredmény | |
| T_14 | Visszajelzések listája oldal betöltése | látható a T_12 visszajelzése | Várt eredmény | |

### Felhasználói adatok ###

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| T_15 | Profil oldal betöltése bejelentkezés nélkül | Átírányítás a bejelentkezés oldalra | Várt eredmény | |
| T_16 | Profil betöltése | A az előző játékok látszanak a jobb oldalon | Várt eredmény | |
| T_17 | Profil szerkesztése oldal betöltése bejelentkezés nélkül | Átírányítás a bejelentkezés oldalra | Várt eredmény | |
| T_18 | Profil szerkesztése oldal betöltése | Minden felhasználói adat megjelenik szerkeszthető formában | Várt eredmény | |
| T_19 | Jelszó módosítási kísérlet nem megegyező mezőkkel | Az oldal figyelmeztet, a művelet sosem fut le | Várt eredmény | |
| T_20 | Felhasználói adat módosítása | Az adat sikeresen megválltozik | Várt eredmény | |

### Rendszergazdai funkciók ###
| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| T_21 | Felhasználók listája oldal betöltése bejelentkezés nélkül | Átírányítás a bejelentkezés oldalra | Várt eredmény | | 
| T_22 | Felhasználók listája oldal betöltése | Minden felhasználó megjelenik | Várt eredmény | | 
| T_23 | Profil gomb megnyomása | Átírányítás a megfelelő felhaszáló profiljára | Várt eredmény | | 
| T_24 | "admin átváltás" gomb megnyomása | A kiválasztott felhasználó státusza negálódik | Várt eredmény | | 
| T_25 | "ban átváltás" gomb megnyomása | A kiválasztott felhasználó státusza negálódik | Várt eredmény | | 
