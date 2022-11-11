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
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
