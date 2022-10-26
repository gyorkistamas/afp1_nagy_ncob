# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása
Ügyfelünk videójáték médiával foglalkozik. Több az iparról szóló hírportálért és blogért felelős.
Több médiumon gyűjt statisztikát a játékosok véleményeiről és tudásáról. Oldalain ösztönzi a felhasználói vélemény nyilvánítást. Rendelkezik automatizált kör email kiküldő és feldolgozó rendszerrel. Minden jelentős gamer rendezvényen állít standot és alkalmaz ügynököket személyes vélemény kikérésre. Ezeket az adatokat piacfelmérési szándékkal halmozza.
Bár módszereik nem hatástalanok, de lazán strukturáltak és közel nem olyan hatékonyak mint egy jól reklámozható centralizált felület.
Ezért bízott meg minket egy gaming témájú kvíz játék elkészítésével.

## 2. Vágyállomrendszer leírása
Egy webes felület ami idális a felhasználói számára videójátékos ismereteik tovább fejlesztésére.
Az oldalon grafikus kvízek kitöltésére nyílik lehetőség, melyekben a videójátékok képről való felismerése a cél. A játékos N mennyiségű kép-játéknév kombinációból álló _feladványt_ kap, ahol számára csak a kép látható ameddig nem helyez le egy tippet a játék címéről, minek hatására a helyes válasz láthatóvá válik.
Minden parti statisztikája a játék körülményeivel egyetemben rögzítésre kerül. Így pontos kép fog kialakulni minden felhasználó egyéni képpeségeiről és egy-egy _feladvány_ nehézségéről Ezekhez az információkhoz a _látogatók_ intuitív módon férhetnek hozzá.
Egy számítógép és aktív internet kapcsolat birtokában bárki játszhat, a részvétel nem meghíváshoz vagy regisztrációhoz kötött. Viszont az utóbbira van lehetőség. Minden regisztrált felhasználó előzményeit külön kezeljük ezzel lehetőséget adva a pontos, személyre szabott adatelemzés nyújtására. Továbbá feliratkozás után a felhasználók képesek lesznek visszajelzéseket írni az _adminoknak_.
Az _adminok_ különleges hatáskörrel rendelkező felhasználók. Ők tudnak módosítani bármely felhasználó és _feladvány_ adatain és új feladványokat hozzáadni. Számukra elérhető egy felhasználói visszajelzés lista is, amin kiemelve szerepelnek a még olvasatlan üzenetek.

## 3. Jelenlegi üzleti folyamatok modellje
Az ügyfél megbízott minket egy videójáték felismerő kvíz oldal elkészítésével.
A rendszer forrása az ügyfelet fogja illetni. Igényt képez annak további bővítési lehetőségével. Elvárás kód bázis könnyű újra fel használása, alapként használása.
Működtetni nélkülünk fogják az oldalt. A cég programozói háttérel nem rendelkező személyeket tervez kinevezni karbantartási és moderálási pozíciókra. Tervezés és kivitelezéskor ez kulcs fontosságó szempont. Minden felmerülhető CRUD műveletre grafikus felületet kell biztosítanunk.
Az oldal adatbányászási céllal jön létre, tehát egy szakszerű, normál formáknak eleget tevő adatbázis szükséges.
A projektre 3 hónap áll rendelkezésre.

## 4. Igényelt üzleti folyamatok modellje

![Image](Képek/uzleti_folyamatok.jpg)

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| F1 | Bejelentkeztető | Bejelentkeztető | bejelentkezést végrehajtó kód |
| F2 | Bejelentkeztető | Bejelentkezési lap | oldal amin keresztül a bejelentkezés történik |
| F3 | Bejelentkeztető | Bejelentkezés ellenörző | felhasználó oldali bejelenkezási form ellenörző |
| F4 | Regisztrációs | Regisztrálás kezelő | regisztrációt végrehajtó kód |
| F5 | Regisztrációs | Regisztálási lap | oldal amin keresztül a regisztrálás történik |
| F6 | Regisztrációs | Regisztálás ellenörző | felhasználó oldali adat ellenörző |
| F7 | Feladvány | Feladvány lista | minden elérhető játék katalógusa amin keresztül a játékos választhat |
| F8 | Feladvány | Feladvány | egy egy quiz játék saját oldala annal elérhető annak végig játszása |
| F9 | Feladvány | Új Feladvány | feladvány hozzáadására szolgáló űrlap; csak adminoknak |
| F10 | Felhasználó | Felhasználó | felhasználói profil; a tulajdonosnak és az adminoknak módosítható |
| F11 | Felhasználó | Felhasználó lista | minden regisztrált felhasználó katalógusa |
| F12 | Feladványaim | Feladványaim | egy felhasználó feladvány története lista formában |
| f13 | Visszajelzés | Visszajelzés küldés | visszajelzést rögzítő kód |
| f14 | Visszajelzés | Visszajelzés küldése lap | oldal amin keresztül a visszajelzés küldés történik |
| f15 | Visszajelzés | Visszajelzés ellenörző | felhasználói oldali  visszajelzés form ellenörző |

## 6. Használati esetek

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| I1 |  K1 | F1 |
| I2 |  K1 | F2 |
| I3 |  K1 | F3 |
| I4 |  K2 | F4 |
| I5 |  K2 | F5 |
| I6 |  K2 | F6 |
| I7 |  K3 | F8 |
| I8 |  K4 | F10 |
| I9 |  K5 | F12 |
| I10 | K6 | F9 |
| I12 | K7 | F13 |
| I14 | K7 | F14 |
| I15 | K7 | F15 |
| I15 | K8 | F11 |
| I16 | N/A | F7 |

## 11 Fogalomszótár
