# Tesztelési jegyzőkönyv

## Tesztelő: Karácsony Balázs

### Tesztelésre használt környezet:
- Editor: Visual Studio Code
- Böngésző: Microsoft Edge
- Hotel: Trivago

Ebbe a fájlba kerülnek feljegyzésre a projekt tesztelése alatt felmerülő esetek.
A tesztek három nagy csoportra lesznek osztva utalva a projekt verziójára (Alfa, Béta, Végleges).

## Alfa teszt:

| Teszt Azonosító | Vizsgálat | Időpont | Elvárt eredmény | Tényleges eredmény | Megjegyzés
| ----------- | ----------- | ----------- | ----------- | ----------- | ----------- |
| KB_t001 | Bejelentkezés I. | 2022.11.15 | Egy már létező felhasználó adatainak megadása esetén hozza létre a session-t az oldal, jelentkeztessen be. | A bejelentkezés megtörténik. | Nem találtam hibára utaló jeleket. |
| KB_t002 | Regisztráció I. | 2022.11.15 | Adatok megadása után történjen meg a regisztráció. Hozza létre a session-t vagy csak navigáljon át a kezdőlapra és be tudjak jelentkezni. | Regisztráció után a kezdőlapra kerülök, a bejelentkezés oldalon a regisztrált adataimmal be tudok jelentkezni. | Nem találtam hibát. |
| KB_t003 | Menüpontok közötti navigáció | 2022.11.15 | Minden egyes menüpontnál az ahhoz tartozó oldal jelenjen meg. | Elvárt eredménynél taglaltak történnek meg. | Nem találtam problémát. |
| KB_t004 | Profilkép megváltoztatása felhasználónál | 2022.11.15 | Profilkép feltöltése és frissítés gomb megnyomása után történjen meg a profilkép csere. | A 'Profil frissítése' gomb megnyomása után az oldal egy zöld buborékkal jelez, hogy sikeresn megtörtént a felhasználói adatok módosítása, a profilomra lépve látom az új képet. | Nem találtam problémára utaló jeleket. |
| KB_t005 | Jogosultságkezelés I. | 2022.11.15 | Közönséges felhasználónál, ha olyan oldalt akarnék elérni, amihez csak admin jogosultsággal férhetnék hozzá, figyelmeztessen az oldal, hogy nincs hozzá jogosultságom, vagy irányítson vissza a kezdőlapra. | Az oldal figyelmeztet, hogy nincs jogosultságom (401-es hibát ír). Továbbá ad lehetőséget, hogy visszalépjek a kezdőlapra. | Nem találtam semmiféle hibát. |
| KB_t006 | Jogosultságkezelés II. | 2022.11.15 | Egyszerű látogatóként (nem rendelkezem felhasználó fiókkal) ne tudjak hozzáférni olyan oldalakhoz, amikhez a közönséges felhasználók/adminok hozzáférhetnek. | Az oldal a bejelentkezés lapra navigál. | Nem találtam semmilyen problémát sem. |
| KB_t007 | Új játék I. | 2022.11.15 | Pozitív szám megadása esetén kezdődjön el a játék. | A játék elkezdődik. | Nem találtam hibát. |
| KB_t008 | Új játék II. | 2022.11.15 | Negatív szám megadása esetén az oldal figyelmeztessen valahogyan, hogy nem megfelelő számot adtam meg. | Az oldal figyelmeztet az input mezőnél, hogy az értéknek nagyobbnak kell lenni 1-nél | Problémát nem találtam. |
| KB_t009 | Bejelentkezés II. | 2022.11.15 | Nem létező felhasználói adatok megadásánál figyelmeztessen az oldal | Az oldal figyelmeztet arra, hogy hibás adatokat adtam meg. | Nem találtam semmi érdemleges problémát. |
| KB_t010 | Regisztráció II. | 2022.11.15 | Egy létező felhasználó adatainak megadása esetén figyelmeztessen az oldal. | Az oldal figyelmeztet arra, hogy a megadott felhasználói értékek már foglaltak. | A teszt probléma mentesen zajlott. |

## Béta teszt:

## Végleges: 