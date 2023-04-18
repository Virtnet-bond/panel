<?php

return [
    'errors' =>
    [
        'invalid_type' => 'Expected {{expected}}, received {{received}}',
        'invalid_type_received_undefined' => 'Requerido',
        'invalid_literal' => 'Invalid literal value, expected {{expected}}',
        'unrecognized_keys' => 'Unrecognized key(s) in object: {{- keys}}',
        'invalid_union' => 'Invalid input',
        'invalid_union_discriminator' => 'Invalid discriminator value. Expected {{- options}}',
        'invalid_enum_value' => 'Invalid enum value. Expected {{- options}}, received \'{{received}}\'',
        'invalid_arguments' => 'Invalid function arguments',
        'invalid_return_type' => 'Invalid function return type',
        'invalid_date' => 'Invalid date',
        'custom' => 'Invalid input',
        'invalid_intersection_types' => 'Intersection results could not be merged',
        'not_multiple_of' => 'Number must be a multiple of {{multipleOf}}',
        'not_finite' => 'Number must be finite',
        'invalid_string' =>
        [
            'email' => 'Invalid {{validation}}',
            'url' => 'Invalid {{validation}}',
            'uuid' => 'Invalid {{validation}}',
            'cuid' => 'Invalid {{validation}}',
            'regex' => 'Invalid',
            'datetime' => 'Invalid {{validation}}',
            'startsWith' => 'Invalid input: must start with "{{startsWith}}"',
            'endsWith' => 'Invalid input: must end with "{{endsWith}}"',
            'hostname' => 'Invalid {{validation}}',
            'english_keyboard_characters' => 'Invalid {{validation}}',
            'password' => 'Must contain 8 characters, one uppercase, one lowercase, one number and one special case character',
            'ip_address' => 'Invalid IP Address',
        ],
        'too_small' =>
        [
            'array' =>
            [
                'exact' => 'Array must contain exactly {{minimum}} element(s)',
                'inclusive' => 'Array must contain at least {{minimum}} element(s)',
                'not_inclusive' => 'Array must contain more than {{minimum}} element(s)',
            ],
            'string' =>
            [
                'exact' => 'String must contain exactly {{minimum}} character(s)',
                'inclusive' => 'String must contain at least {{minimum}} character(s)',
                'not_inclusive' => 'String must contain over {{minimum}} character(s)',
            ],
            'number' =>
            [
                'exact' => 'Number must be exactly {{minimum}}',
                'inclusive' => 'Number must be greater than or equal to {{minimum}}',
                'not_inclusive' => 'Number must be greater than {{minimum}}',
            ],
            'set' =>
            [
                'exact' => 'Invalid input',
                'inclusive' => 'Invalid input',
                'not_inclusive' => 'Invalid input',
            ],
            'date' =>
            [
                'exact' => 'Date must be exactly {{- minimum, datetime}}',
                'inclusive' => 'Date must be greater than or equal to {{- minimum, datetime}}',
                'not_inclusive' => 'Date must be greater than {{- minimum, datetime}}',
            ],
        ],
        'too_big' =>
        [
            'array' =>
            [
                'exact' => 'Array must contain exactly {{maximum}} element(s)',
                'inclusive' => 'Array must contain at most {{maximum}} element(s)',
                'not_inclusive' => 'Array must contain less than {{maximum}} element(s)',
            ],
            'string' =>
            [
                'exact' => 'String must contain exactly {{maximum}} character(s)',
                'inclusive' => 'String must contain at most {{maximum}} character(s)',
                'not_inclusive' => 'String must contain under {{maximum}} character(s)',
            ],
            'number' =>
            [
                'exact' => 'Number must be exactly {{maximum}}',
                'inclusive' => 'Number must be less than or equal to {{maximum}}',
                'not_inclusive' => 'Number must be less than {{maximum}}',
            ],
            'set' =>
            [
                'exact' => 'Invalid input',
                'inclusive' => 'Invalid input',
                'not_inclusive' => 'Invalid input',
            ],
            'date' =>
            [
                'exact' => 'Date must be exactly {{- maximum, datetime}}',
                'inclusive' => 'Date must be smaller than or equal to {{- maximum, datetime}}',
                'not_inclusive' => 'Date must be smaller than {{- maximum, datetime}}',
            ],
        ],
    ],
    'validations' =>
    [
        'email' => 'correo electronico',
        'url' => 'url',
        'uuid' => 'uuid',
        'cuid' => 'cuid',
        'regex' => 'regex',
        'datetime' => 'fecha-hora',
    ],
    'types' =>
    [
        'function' => 'funcion',
        'number' => 'numero',
        'string' => 'string',
        'nan' => 'nan',
        'integer' => 'integro',
        'float' => 'float',
        'boolean' => 'boolean',
        'date' => 'date',
        'bigint' => 'bigint',
        'undefined' => 'sin definir',
        'symbol' => 'simbolo',
        'null' => 'nulo',
        'array' => 'matriz',
        'object' => 'objeto',
        'unknown' => 'desconocido',
        'promise' => 'promise',
        'void' => 'void',
        'never' => 'nunca',
        'map' => 'map',
        'set' => 'set',
    ],
];
