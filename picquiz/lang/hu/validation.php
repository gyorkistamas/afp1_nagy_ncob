<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'A következőt muszáj elfogadnia: :attribute.',
    'accepted_if' => 'A(z) :attribute -t muszáj elfogadnia ha a(z) :other értéke: :value.',
    'active_url' => 'A(z) :attribute értéke nem egy helyes URL.',
    'after' => 'A(z) :attribute értékének a(z) :date dátum után kell lennie.',
    'after_or_equal' => 'A(z) :attribute értékének a(z) :date dátummal egyenlőnek vagy után kell lennie.',
    'alpha' => 'A(z) :attribute mező csak betűket tartalmazhat.',
    'alpha_dash' => 'A(z) :attribute mező csak  betűket, számokat, kötőjeleket és alávonásokat tartalmazhat.',
    'alpha_num' => 'A(z) :attribute mező csak betűket és számokat tartalmazhat.',
    'array' => 'A(z) :attribute mezőnek egy tömbnek kell lennie.',
    'before' => 'A(z) :attribute értékének a(z) :date dátum előtt kell lennie.',
    'before_or_equal' => 'A(z) :attribute értékének a(z) :date dátummal egyenlőnek vagy előttinek kell lennie.',
    'between' => [
        'array' => 'A(z) :attribute mezőnek :min és :max között kell lennie.',
        'file' => 'A(z) :attribute mezőnek :min és :max kilobyte között kell lennie.',
        'numeric' => 'A(z) :attribute mezőnek :min és :max között kell lennie.',
        'string' => 'A(z) :attribute mezző hosszának :min és :max között kell lennie.',
    ],
    'boolean' => 'A(z) :attribute fmezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed' => 'A(z) :attribute mező megerősítése nem egyezik.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'A(z) :attribute értéke nem egy helyes dátum.',
    'date_equals' => 'A(z) :attribute értékének egyenlőnek kell lennie ezzel: :date.',
    'date_format' => 'A(z) :attribute értéke nem egyezik meg ezzel a formátummal: :format.',
    'declined' => 'A(z) :attribute mezőt el kell utasítani.',
    'declined_if' => 'A(z) :attribute mezőt el kell utasítani amikor a(z) :other mező értéke: :value.',
    'different' => 'A(z) :attribute és :other értékeiknek különbözőknek kell lenniük.',
    'digits' => 'A(z) :attribute mező értékének :digits számjegynek kell lennie.',
    'digits_between' => 'A(z) :attribute értéknek :min és :max közötti számjegynek kell lennie.',
    'dimensions' => 'A(z) :attribute mezőnek helytelen a kép dimenziói.',
    'distinct' => 'A(z) :attribute mezőben duplikátum van.',
    'doesnt_end_with' => 'A(z) :attribute nem végződhet ezekkel: :values.',
    'doesnt_start_with' => 'A(z) :attribute nem kezdőthet ezekkel: :values.',
    'email' => 'A(z) :attribute értékének egy helyes e-mail címnek kell lennie.',
    'ends_with' => 'A(z) :attribute ezekre kell végződnie: :values.',
    'enum' => 'A kiválasztott mező (:attribute) érvénytelen.',
    'exists' => 'A kiválasztott mező (:attribute) érvénytelen.',
    'file' => 'A(z) :attribute egy fájlnak kell lennie.',
    'filled' => 'A(z) :attribute mezőt ki kell tölteni!.',
    'gt' => [
        'array' => 'A(z) :attribute mezőnek több, mint :value elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének nagyobbnak kell lennie, mint :value kilobyte.',
        'numeric' => 'A(z) :attribute nagyobbnak kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának nagyobbnak kell lennie, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A(z) :attribute legalább :value elemet kell tartalmaznia, vagy többet.',
        'file' => 'A(z) :attribute méretének nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A(z) :attribute értékének nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának hosszabbnak vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'image' => 'A(z) :attribute értékének képnek kell lennie.',
    'in' => 'A kiválasztott elem (:attribute) helytelen.',
    'in_array' => 'A(z) :attribute nem létezik ebben: :other.',
    'integer' => 'A(z) :attribute értékének egy egész számnak kell lennie.',
    'ip' => 'A(z) :attribute értékének egy helyes IP címnek kell lennie.',
    'ipv4' => 'A(z) :attribute értékének egy helyes IPv4 címnek kell lennie.',
    'ipv6' => 'A(z) :attribute értékének egy helyes IPv6 címnek kell lennie.',
    'json' => 'A(z) :attribute értékének egy helyes JSON szövegnek kell lennie.',
    'lt' => [
        'array' => 'A(z) :attribute mezőnek kevesebb, mint :value elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute méretének kevesebbnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A(z) :attribute kevesebbnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának kevesebbnek kell lennie, mint :value karakter.',
    ],
    'lte' => [
        'array' => 'A(z) :attribute maximum :value elemet tartalmazhat, vagy kevesebbet.',
        'file' => 'A(z) :attribute méretének kisebbnek vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'numeric' => 'A(z) :attribute értékének kisebbnek vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute hosszának rövidebbnek vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'mac_address' => 'A(z) :attribute értékének egy helyes MAC címnek kell lennie.',
    'max' => [
        'array' => 'A(z) :attribute nem tartalmazhat :max darab elemnél többet.',
        'file' => 'A(z) :attribute nem lehet nagyobb :max kilobyte-nál.',
        'numeric' => 'A(z) :attribute nem lehet nagyobb ennél: :max.',
        'string' => 'A(z) :attribute nem lehet hosszabb :max karakternél.',
    ],
    'max_digits' => 'A(z) :attribute nem tartalmazhat :max darab számjegynél többet.',
    'mimes' => 'A(z) :attribute típusának ilyennek kell lennie: :values.',
    'mimetypes' => 'A(z) :attribute típusának ilyeneknek kell lennie: :values.',
    'min' => [
        'array' => 'A(z) :attribute mezőnek legalább :min elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute mezőnek legalább :min kilobyte méretűnek kell lennie.',
        'numeric' => 'A(z) :attribute mezőnek legalább :min méretűnek kell lennie.',
        'string' => 'A(z) :attribute mezőnek legalább :min karakter hosszúnak kell lennie.',
    ],
    'min_digits' => 'A(z) :attribute mezőnek legalább :min számjegynek kell lennie.',
    'multiple_of' => 'A(z) :attribute értéke a(z) :value szorosa kell legyen.',
    'not_in' => 'A(z) kiválasztott mező (:attribute) érvénytelen.',
    'not_regex' => 'A(z) :attribute formátuma helytelen.',
    'numeric' => 'A(z) :attribute értékének számnak kell lennie.',
    'password' => [
        'letters' => 'A(z) :attribute mezőnek legalább egy betűt tartalmaznia kell.',
        'mixed' => 'A(z) :attribute mezőnek legalább egy kis- és nagybetűt tartalmaznia kell.',
        'numbers' => 'A(z) :attribute mezőnek legalább egy egy számot tartalmaznia kell.',
        'symbols' => 'A(z) :attribute mezőnek legalább egy egy szimbólumot tartalmaznia kell.',
        'uncompromised' => 'A(z) megadott érték (:attribute) szerepel egy adatszivárgásban. Kérem válasszon másikat.',
    ],
    'present' => 'A(z) :attribute értékének jelen kell lennie.',
    'prohibited' => 'A(z) :attribute mező le van tiltva.',
    'prohibited_if' => 'A(z) :attribute le van tiltva ha :other értéke: :value.',
    'prohibited_unless' => 'A(z) :attribute mező értéke le van tiltva, kivéve ha :other értéke: :values.',
    'prohibits' => 'A(z) :attribute mező megtiltja, hogy  :other jelen legyen.',
    'regex' => 'A(z) :attribute formátuma helytelen.',
    'required' => 'A(z) :attribute mezőt kötelező kitölteni.',
    'required_array_keys' => 'A(z) :attribute ilyen értékeket kell tartalmaznia: :values.',
    'required_if' => 'A(z) :attribute mezőt kötelező kitölteni, amikor :other értéke: :value.',
    'required_if_accepted' => 'A(z) :attribute mező kötelező, ha :other el el van fogadva.',
    'required_unless' => 'A(z) :attribute mező kötelező, kivéve ha :other értéke: :values.',
    'required_with' => 'A(z) :attribute mező kötelező, ha  :values érték jelen van.',
    'required_with_all' => 'A(z) :attribute mező kötelező, ha :values értékek jelenk vannak.',
    'required_without' => 'A(z) :attribute mező kötelező, ha :values nincsen jelen.',
    'required_without_all' => 'A(z) :attribute mező kötelező, ha ezek közül semelyik sincs jelen: :values.',
    'same' => 'A(z) :attribute és :other értékének meg kell egyeznie.',
    'size' => [
        'array' => 'A(z) :attribute ennyi elemet kell tartalmaznia: :size.',
        'file' => 'A(z) :attribute mezőnek ekkorának kell lennie: :size kilobyte.',
        'numeric' => 'A(z) :attribute számnak ekkorának kell lennie: :size.',
        'string' => 'A(z) :attribute mezőnek :size karakternek kell lennie.',
    ],
    'starts_with' => 'A(z) :attribute ezen valamelyikével kell kezdődnie: :values.',
    'string' => 'A(z) :attribute mezőnek szövegnek kell lennie.',
    'timezone' => 'A(z) :attribute értékének egy helyes időzónának kell lennie.',
    'unique' => 'A(z) :attribute értéke már foglalt.',
    'uploaded' => 'A(z) :attribute feltöltése sikertelen volt.',
    'url' => 'A(z) :attribute értékének egy helyes URL címnek kell lennie.',
    'uuid' => 'A(z) :attribute értékének egy helyes UUID-nak kell lennie.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
