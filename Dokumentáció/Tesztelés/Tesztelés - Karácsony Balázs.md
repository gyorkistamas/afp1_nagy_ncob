# Tesztelési jegyzőkönyv

## Tesztelő: Karácsony Balázs

### Tesztelésre használt környezet:
- Editor: Visual Studio Code
- Böngésző: Microsoft Edge

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

| Teszt Azonosító | Vizsgálat | Időpont | Elvárt eredmény | Tényleges eredmény | Megjegyzés
| ----------- | ----------- | ----------- | ----------- | ----------- | ----------- |
| KB_t011 | Új feladvány hozzáadása I. | 2022.12.01 | Adatok megadása nélküli feladvány hozzáadásakor dobjon hibát, vagy figyelmeztessen az oldal a hiányzó input mezőkkel kapcsolatban. | Az oldal figyelmeztet a hiányos input mezőkről. | Nem találtam problémát. |
| KB_t012 | Új feladvány hozzáadása II. | 2022.12.01 | Adatok megfelelő megadásakor kerüljön fel az oldalra a feladvány. | A feladvány feltöltése megtörténik, az oldal egy zöld üzenettel értesít erről. | Nem volt hiba a tesztelés során. |
| KB_t013 | Feladványok kilistázása | 2022.12.01 | 3 feladvány legyen soronként, oldalonként 2 sor, működjön a lapozás. | Az történik ami elvárt lenne, csak feladványok adatai hibásan kerülnek fel. | Hibát találtam. |
| KB_t014 | Felhasználók kezelése I. | 2022.12.01 | Csak adminok tudják elérni a Felhasználók kezeléséhez tartozó oldalt. | Közönséges felhasználóként is hozzá tudok férni az oldalhoz, ha beírom az elérési az oldal útvonalát. | Hibát találtam. |
| KB_t015 | Felhasználók kezelése II. | 2022.12.01 | Adminként ha kitiltok egy felhasználót, akkor ő ne legyen képes bejelentkezni, figyelmeztesse az oldal, hogy kitiltásra került. | Ha be akarok jelentkezni egy már kitiltott felhasználóval, akkor az oldal figyelmeztet, hogy kitiltásra került és nem történik meg a beléptetés. | A tesztelés probléma mentesen zárult. |
| KB_t016 | Felhasználók kezelése III. | 2022.12.01 | Adminként ha feloldom a kitiltást egy felhasználóról, akkor ő legyen képes újra hozzáférni az oldal többi részéhez. | Elvárt eredménnyel megegyezik. Újra be tudok jelentkezni. | Nem találtam problémát. |
| KB_t017 | Felhasználók kezelése IV. | 2022.12.01 | Ha egy felhasználót kinevezek adminnak, akkor ő is képes legyen hozzáférni a Felhasználók kezelése oldalhoz, képes legyen kitiltani másokat és kinevezni adminra. | Az elvárt eredménynél taglaltakkal egyenlő. | Nem volt hiba. |
| KB_t018 | Játék | 2022.12.01 | A megadott mennyiségnek megfelelő feladvány kövesse egymást, ha végére értünk legyen róla statisztika. | Elvárt eredménnyel megegyezik. | Probléma mentes volt a tesztelés. |
| KB_t019 | Felhasználók kezelése V. | 2022.12.01 | Admin felhasználó ne tudja saját magát kitiltani. | A jelenlegi felhasználónál nem jelennek meg olyan opciók | Nem volt probléma.
| KB_t020 | Felhasználók kezelése VI. | 2022.12.01 | Admin felhasználó ne tudja saját magát lefokozni. | Ugyanaz mint az elvárt eredménynél. | Nem volt hiba. |

## Végleges: 