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

	"accepted"             => "El valor ingresado en :attribute debe ser aceptado.",
	"active_url"           => "El valor ingresado en :attribute no es un URL válido.",
	"after"                => "El valor ingresado en :attribute debe ser una fecha posterior a :date.",
	"alpha"                => "El valor ingresado en :attribute solo puede contener letras.",
	"alpha_dash"           => "El valor ingresado en :attribute solo puede contener letras, numeros, y guiones.",
	"alpha_num"            => "El valor ingresado en :attribute solo puede contener letras y numeros.",
	"array"                => "El valor ingresado en :attribute debe ser un arreglo.",
	"before"               => "El valor ingresado en :attribute debe ser una fecha anterior a :date.",
	"between"              => [
		"numeric" => "El valor ingresado en :attribute debe ser entre :min y :max.",
		"file"    => "El valor ingresado en :attribute debe ser entre :min y :max kilobytes.",
		"string"  => "El valor ingresado en :attribute debe ser entre :min y :max caracteres.",
		"array"   => "El valor ingresado en :attribute debe tener entre :min y :max items.",
	],
	"boolean"              => "El valor ingresado en :attribute ser true o false.",
	"confirmed"            => "El valor ingresado en :attribute confirmation does not match.",
	"date"                 => "El valor ingresado en :attribute es una fecha inválida.",
	"date_format"          => "El valor ingresado en :attribute debe corresponder al formato :format.",
	"different"            => "El valor ingresado en :attribute y :other debe ser diferente.",
	"digits"               => "El valor ingresado en :attribute debe ser :digits dígitos.",
	"digits_between"       => "El valor ingresado en :attribute debe ser entre :min y :max dígitos.",
	"email"                => "El valor ingresado en :attribute debe ser un correo electrónico válido.",
	"filled"               => "Debe ingresar :attribute",
	"exists"               => "El valor ingresado en :attribute es inválido.",
	"image"                => "El valor ingresado en :attribute debe ser una imagen.",
	"in"                   => "El valor ingresado en :attribute es inválido.",
	"integer"              => "El valor ingresado en :attribute debe ser un número entero.",
	"ip"                   => "El valor ingresado en :attribute debe ser una dirección IP válida.",
	"max"                  => [
		"numeric" => "El valor ingresado en :attribute no debe ser mayor a :max.",
		"file"    => "El valor ingresado en :attribute no debe ser mayor a :max kilobytes.",
		"string"  => "El valor ingresado en :attribute no debe ser mayor a :max caracteres.",
		"array"   => "El valor ingresado en :attribute no debe tener mas de :max items.",
	],
	"mimes"                => "El valor ingresado en :attribute debe ser un archivo de tipo: :values.",
	"min"                  => [
		"numeric" => "El valor ingresado en :attribute debe ser mínimo de :min.",
		"file"    => "El valor ingresado en :attribute debe ser mínimo de :min kilobytes.",
		"string"  => "El valor ingresado en :attribute debe ser mínimo de :min caracteres.",
		"array"   => "El valor ingresado en :attribute debe tener mínimo de :min items.",
	],
	"not_in"               => "El valor ingresado en :attribute es inválido.",
	"numeric"              => "El valor ingresado en :attribute debe ser un número.",
	"regex"                => "El valor ingresado en :attribute no tiene el formato correcto.",
	"required"             => "Debe ingresar :attribute.",
	"required_if"          => "Debe ingresar :attribute cuando :other es :value.",
	"required_with"        => "Debe ingresar :attribute cuando :values está presente.",
	"required_with_all"    => "Debe ingresar :attribute cuando :values está presente.",
	"required_without"     => "Debe ingresar :attribute cuando :values no está presente.",
	"required_without_all" => "Debe ingresar :attribute cuando ninguno de :values están presentes.",
	"same"                 => "El valor ingresado en :attribute debe ser igual a :other.",
	"size"                 => [
		"numeric" => "El valor ingresado en :attribute debe ser :size.",
		"file"    => "El valor ingresado en :attribute debe ser :size kilobytes.",
		"string"  => "El valor ingresado en :attribute debe ser :size caracteres.",
		"array"   => "El valor ingresado en :attribute debe contener :size items.",
	],
	"unique"               => "El valor ingresado en :attribute ya se encuentra registrado.",
	"url"                  => "El valor ingresado en :attribute es inválido.",
	"timezone"             => "El valor ingresado en :attribute debe ser un time zone válido.",

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
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [
    ],

];
