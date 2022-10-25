# Követelmény specifikáció

## 1. Áttekintés

    Manapság a videójátékok is egy fontos részét képezik a szórakoztatótiparnak. 
    A '80-as/'90-es évek idején nem igazán lehetett elképzelni, hogy a filmipar mellett a videójáték-ipar is fog annyira fejlődni, hogy napjainkban nemcsak a filmeknek, hanem a játékoknak történeteiből/meghatározó jeleneteiből is készülhetnek mindenféle tudást ellenörző kérdéssorok, quiz-ek, szellemi játékok, vetélkedők; kritikák; esetlegesen mémek is.
    Filmekből/Sorozatokból rengeteg ilyet lehet találni az interneten, videójátékokról kevésbé, pedig ugyanúgy a videójátékok sztoriaiban is lehet ugyanannyi potenciál, hogy esetlegesen bizonyos tudást felmérő kérédéssorok formájában teszteljük az adott oldalra látogatók tájékozottságát az adott játékkal kapcsolatban.

## 2. A jelenlegi helyzet leírása

    Cégünk oldala különböző videójátékokkal kapcsolatos ismeretek felmérésével foglalkozik.
    Felméréseink/kvízeink a videójáték-ipar különböző IP-jainak jeleneteiből kiragadott képkockák alapján tesztelné az oldalra tévedők tudását, hogy vajon melyik alkotásból is származik az adott jelenetet leíró kép. 
    A kvíz indításához nem kötelező felhasználói fiókkal rendelkezni, azonban a kvíz után kapott eredmények elmentéséhez szükséges egy regisztráció.
    Az oldalra regisztrált felhasználók megtekinthetik korábbi eredményeiket a kvízekkel kapcsolatban, statisztikákat is nézhetnek az adott feladványokról.

## 3. Vágyálomrendszer

    Egy olyan web alkalmazás megvalósítása (a PHP programozási nyelvet eszközkészletét kibővítő Laravel keretrendszerben), ahol lehetőség van feladványok kitöltésére csupán *látogatóként*, de ugyanakkor nem veti meg a felhasználókezelő rendszert.
    Legyen lehetőség az oldalon felhasználók regisztrálására, a már regisztrált fiókkal rendelkezőknek a kvízek eredményeinek eltárolására, statisztikák kilistázására a kvízekről.
    Különböző jogosultságok legyenek az oldalon, a *közönséges felhasználóknak* rendelkezzenek az oldalon egyfajta adatlappal, ahol meg tudják tekinteni az előrehaladásaikat/teljesítményeiket, a jelenlegi adataikat módosítani, illetve tudjanak visszajelzéseket írni az *adminisztrátoroknak* az oldalon felmerülő problémákról, változtatásokról.
    Az adminisztrátornál is ugyanúgy megtalálható az adatlap, de neki továbbá lehetősége lesz hozzáférni olyan funkciókhoz, mint pl. az oldalra regisztrált felhasználók megtekintése, ahol mindenféle műveletet végezhet, illetve feladványok hozzáadása az oldalra. Az admin új feladványokkal is bővítheti az oldal kvíz állományát.

## 4. Jelenlegi üzleti folyamatok modellje

## 5. Igényelt üzleti folyamatok modellje

![Image](Képek/uzleti_folyamatok.jpg)

## 6. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Bejelentkezés | Bejelentkezési lap | Bejelentkező felület |
| K2 | Regisztráció | Regisztrációs lap |Regisztrációs felület látogatóknak |
| K3 | Új játék indítása | *Új játék indítása* oldal | Új játék indítására és lejátszására szolgáló oldal |
| K4 | Saját profil megtekintése | *Profilom* oldal | Saját adatok és statisztikák megtekintése, személyes adatok szerkesztése |
| K5 | Feladványok megtekintése | *Feladványaim* lap | Adminisztrátorok számára feladványok listázása, azok törlése |
| K6 | Új feladvány feltöltése | *Feladvány létrehozása/hozzáadása* oldal | Adminisztrátorok számára új feladványok feltöltése |
| K7 | Visszajelzés | *Visszajelzés küldése* lap | Felhasználók számára visszajelzés írása, adminisztrátorok számára ezek megtekintése |
| K8 | Felhasználók megtekintése | *Felhasználók kilistázása* lap | Adminisztrátorok számára felhasználók megtekintése, keresése, lehetőség a felhasználók kitiltására, adminisztrátorrá való előléptetésére |

## 7. Fogalomtár