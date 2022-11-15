## Alfa tesztelés

### Bejelentkezés / regisztráció tesztelése

**Tesztelés dátuma:** 2022.11.15

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| GYT_001 | Regisztráció esetén mezők hiányos kitöltése. | Az oldal figyelmeztet a hiányosságokra. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_002 | Regisztráció már létező e-mail címmel | Nem történik meg a regisztráció. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_003 | Regisztráció nem megyegyező jelszóval | Nem történik meg a regisztráció, jelzi az oldal a hibát. | Megyegyezik a várt eredménnyel | Nem találtam hibát. |
| GYT_004 | Bejelentkezés megfelelő adatokkal. | Megtörténik a bejelentkezés. | Megegyezik a várt eredménnyel. | Nem találtam hibát. |
| GYT_005 | Bejelentkezés hibás adatokkal. | Nem történik meg a bejelentkezés, hibás adatok jelzése. | Megegyezik a várt eredménnyel. | Nem találtam hibát. | 