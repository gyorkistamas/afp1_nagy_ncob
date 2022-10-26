# Követelmény specifikáció

## 1. Áttekintés

Manapság a videójátékok is egy fontos részét képezik a szórakoztatótiparnak. 
A '80-as/'90-es évek idején nem igazán lehetett elképzelni, hogy a filmipar mellett a videójáték-ipar is fog annyira fejlődni, hogy napjainkban nemcsak a filmeknek, hanem a játékoknak történeteiből/meghatározó jeleneteiből is készülhetnek mindenféle tudást ellenörző kérdéssorok, quiz-ek, szellemi játékok, vetélkedők; kritikák; esetlegesen mémek is.
Filmekből/Sorozatokból rengeteg ilyet lehet találni az interneten, videójátékokról kevésbé, pedig ugyanúgy a videójátékok sztoriaiban is lehet ugyanannyi potenciál, hogy esetlegesen bizonyos tudást felmérő kérédéssorok formájában teszteljük az adott oldalra látogatók tájékozottságát az adott játékkal kapcsolatban.

## 2. A jelenlegi helyzet leírása

Cégünk különböző videójátékokkal kapcsolatos ismeretek felmérésével foglalkozik.
Úgy gondoltuk, ideje lenne bővíteni a cég munkájának elérhetőségét egy Web-es alkalmazás formájában.
Felméréseink/kvízeink a videójáték-ipar különböző IP-jainak jeleneteiből kiragadott képkockák alapján tesztelné az oldalra tévedők tudását, hogy vajon melyik alkotásból is származik az adott jelenetet leíró kép. 
A kvíz indításához nem kötelező felhasználói fiókkal rendelkezni, azonban a kvíz után kapott eredmények elmentéséhez szükséges egy regisztráció.
Az oldalra regisztrált felhasználók megtekinthetik korábbi eredményeiket a kvízekkel kapcsolatban, statisztikákat is nézhetnek az adott feladványokról.

## 3. Vágyálomrendszer

Egy olyan web alkalmazás megvalósítása (a PHP programozási nyelv eszközkészletét kibővítő Laravel keretrendszerben), ahol lehetőség van feladványok kitöltésére csupán *látogatóként* is, de ugyanakkor nem veti meg a felhasználókezelő rendszert.
Legyen lehetőség az oldalon felhasználók regisztrálására, a már regisztrált fiókkal rendelkezőknek a kvízek eredményeinek eltárolására, statisztikák kilistázására a kvízekről.
Különböző jogosultságok legyenek az oldalon, a *közönséges felhasználóknak* rendelkezzenek az oldalon egyfajta adatlappal, ahol meg tudják tekinteni az előrehaladásaikat/teljesítményeiket, a jelenlegi adataikat módosítani, illetve tudjanak visszajelzéseket írni az *adminisztrátoroknak* az oldalon felmerülő problémákról, változtatásokról.
Az adminisztrátornál is ugyanúgy megtalálható az adatlap, de neki továbbá lehetősége lesz hozzáférni olyan funkciókhoz, mint pl. az oldalra regisztrált felhasználók megtekintése, ahol mindenféle műveletet végezhet, illetve feladványok hozzáadása az oldalra. Az admin új feladványokkal is bővítheti az oldal kvíz állományát.

## 4. Jelenlegi üzleti folyamatok modellje

Jelenlegi helyzet szerint, ügyfelünk még nem rendelkezik a mi elképzeléseinkhez hasonló, tájékozottságot vizsgáló kvízekkel Gaming téma terén és minél hamarabb szeretne hozzájutni a kész termékhez. Elvárásai között ott van, hogy legyen egy mód arra, hogy ő maga is tudja később bővíteni a feladványtárat. Továbbá legyen funkció arra is, hogy meg lehessen tekinteni a kvízek végén, hogy pl.: mennyi pontot szereztünk, vagy, hogy mennyire voltunk gyorsak, a lényeg az legyen, hogy valamilyen szinten mérjük és tároljuk el az egyes játékosok teljesítményeit/pontjait.
Illetve a feladatok ne legyenek túl bonyolultak, te túl egyszerűek sem. Valahogy keltsék fel az érdeklődést az arra tévedőkben; lehessen könnyedén kiigazodni az oldal felületén, könnyen kezelhető és hozzáférhető legyen.


## 5. Igényelt üzleti folyamatok modellje

![Image](Képek/uzleti_folyamatok.jpg)

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Bejelentkezés | Bejelentkezési lap | Bejelentkező felület |
| K2 | Regisztráció | Regisztrációs lap |Regisztrációs felület látogatóknak. |
| K3 | Új játék indítása | *Új játék indítása* oldal | Új játék indítására és lejátszására szolgáló weblap |
| K4 | Saját profil megtekintése | *Profilom* oldal | Saját adatok megtekintése, szerkesztése, statisztikák megtekintése. |
| K5 | Feladványok megtekintése | *Feladványaim* lap | Feladványok kilistázása, törlése adminisztrátorok számára |
| K6 | Új feladvány feltöltése | *Feladvány létrehozása/hozzáadása* oldal | Új feladványok hozzáadása. Csak az adminisztrátor férhessen hozzá! |
| K7 | Visszajelzés | *Visszajelzés küldése* lap | Felhasználók számára visszajelzés írása. |
| K8 | Felhasználók megtekintése | *Felhasználók kilistázása* lap | Felhasználók kezelése adminisztrátorként. |

## 7. Fogalomtár

- (Weboldalra) Látogató: A weblap tartalmának olyan fogyasztója, aki nem rendelkezik felhasználói fiókkal. Hozzáférési lehetőségei kötöttek, de azért előfordulhatnak számára is elérhető funkciók.

- Quiz/Kvíz/Feladvány: Szellemi, tudást felmérő játék. A mi oldalunk esetében jelenetekből kiragadaott képek, amik alapján meg kell állapítani a forrást, amiből származhat a kép.

- IP (Intellectual Property): Szellemi Tulajdon/Alkotás. Pl.: regény, vers, eposz, dal, zene, festmény, rajz, videó, kép, film, videójáték, valamiféle találmány.
