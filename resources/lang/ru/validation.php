<?php

return [

	'accept' => 'Атрибут: должен быть принят.',
	'active_url' => 'Атрибут: не является действительным URL.',
	'after' => 'Атрибут: должен быть датой после: date.',
	'after_or_equal' => 'Атрибут: должен быть датой после или равен: date.',
	'alpha' => 'Атрибут: может содержать только буквы.',
	'alpha_dash' => 'Атрибут: может содержать только буквы, цифры, тире и подчеркивания.',
	'alpha_name' => 'Атрибут: должен быть отформатирован как имя без неожиданных символов или знаков препинания.',
	'alpha_num' => 'Атрибут: может содержать только буквы и цифры.',
	'array' => 'Атрибут: должен быть массивом.',
	'before' => 'Атрибут: должен быть датой до: date.',
	'before_or_equal' => 'Атрибут: должен быть датой до или равен дате.',
	'between' => [
	'numeric' => 'Атрибут: должен быть между: min и: max.',
	'file' => 'Атрибут: должен быть между: min и: max килобайт.',
	'string' => 'Атрибут: должен быть между: min и: max символами.',
	'array' => 'Атрибут: должен иметь значения между: min и: max items.',
	],
	'boolean' => 'Поле атрибута: должно быть истинным или ложным.',
	'verified' => 'Подтверждение: атрибут не совпадает.',
	'date' => 'Атрибут: не является допустимой датой.',
	'date_format' => 'Атрибут: не соответствует формату: формат.',
	'different' => 'Атрибут:: и: other должны быть разными.',
	'digits' => 'Атрибут: должен быть: цифры цифры.',
	'digits_between' => 'Атрибут: должен быть между: min и: max digits.',
	'sizes' => 'Атрибут: имеет недопустимые размеры изображения.',
	'different' => 'Поле: attribute имеет повторяющееся значение.',
	'email' => 'Атрибут: должен быть действительным адресом электронной почты.',
	'exist' => 'Выбранный: атрибут недействителен.',
	'file' => 'Атрибут: должен быть файлом.',
	'fill' => 'Поле: attribute должно иметь значение.',
	'gt' => [
	'numeric' => 'Атрибут: должен быть больше чем: значение.',
	'file' => 'Атрибут: должен быть больше чем: значение в килобайтах.',
	'string' => 'Атрибут: должен быть больше чем: значение символов.',
	'array' => 'Атрибут: должен иметь больше чем: значение элементов.',
	],
	'gte' => [
	'numeric' => 'Атрибут: должен быть больше или равен: значению.',
	'file' => 'Атрибут: должен быть больше или равен: значение в килобайтах.',
	'string' => 'Атрибут: должен быть больше или равен символам: значение.',
	'array' => 'Атрибут: должен иметь: элементы значения или более.',
	],
	'image' => 'Атрибут: должен быть изображением.',
	'in' => 'Выбранный: атрибут недействителен.',
	'in_array' => 'Поле атрибута: не существует в: other.',
	'integer' => 'Атрибут: должен быть целым числом.',
	'ip' => 'Атрибут: должен быть действительным IP-адресом.',
	'ipv4' => 'Атрибут: должен быть действительным адресом IPv4.',
	'ipv6' => 'Атрибут: должен быть действительным адресом IPv6.',
	'json' => 'Атрибут: должен быть допустимой строкой JSON.',
	'lt' => [
	'numeric' => 'Атрибут: должен быть меньше чем: значение.',
	'file' => 'Атрибут: должен быть меньше, чем: значение в килобайтах.',
	'string' => 'Атрибут: должен быть меньше чем: значение символов.',
	'array' => 'Атрибут: должен содержать меньше: value элементов.',
	],
	'lte' => [
	'numeric' => 'Атрибут: должен быть меньше или равен: значению.',
	'file' => 'Атрибут: должен быть меньше или равен: значение в килобайтах.',
	'string' => 'Атрибут: должен быть меньше или равен символам: value.',
	'array' => 'Атрибут: не должен содержать больше, чем: value items.',
	],
	'max' => [
	'numeric' => 'Атрибут: не может быть больше, чем: max.',
	'file' => 'Атрибут: не может быть больше, чем: max килобайт.',
	'string' => 'Атрибут: не может быть больше, чем: max символов.',
	'array' => 'Атрибут: может содержать не более: max элементов.',
	],
	'mimes' => 'Атрибут: должен быть файлом типа:: values.',
	'mimetypes' => 'Атрибут: должен быть файлом типа:: values.',
	'min' => [
	'numeric' => 'Атрибут: должен быть не менее: min.',
	'file' => 'Атрибут: должен быть не менее: минимум килобайт.',
	'string' => 'Атрибут: должен содержать не менее: минимум символов.',
	'array' => 'Атрибут: должен содержать как минимум: min items.',
	],
	'not_in' => 'Атрибут selected: недействителен.',
	'not_regex' => 'Неверный формат атрибута.',
	'numeric' => 'Атрибут: должен быть числом.',
	'present' => 'Поле: атрибут должно присутствовать.',
	'regex' => 'Неверный формат атрибута.',
	'required' => 'Поле: атрибут',

	'required_if' => 'Поле: атрибут обязательное, когда: other is: value.',
	'required_unless' => 'Поле: атрибут является обязательным, если: other не находится в: values.',
	'required_with' => 'Поле: атрибут обязательное, если присутствует: values.',
	'required_with_all' => 'Поле: атрибут обязательное, когда: значения присутствуют.',
	'required_without' => 'Поле: атрибут обязательное, если: значения отсутствуют.',
	'required_without_all' => 'Поле: атрибут обязательное, если нет ни одного из: значений.',
	'same' => 'Атрибуты: и: other должны совпадать.',
	'size' => [
	'numeric' => 'Атрибут: должен быть: size.',
	'file' => 'Атрибут: должен иметь размер: килобайт.',
	'string' => 'Атрибут: должен быть: размер символов.',
	'array' => 'Атрибут: должен содержать: size items.',
	],
	'string' => 'Атрибут: должен быть строкой.',
	'timezone' => 'Атрибут: должен быть действительной зоной.',
	'unique' => 'Атрибут: уже занят.',
	'uploaded' => 'Атрибут: не удалось загрузить.',
	'url' => 'Неверный формат атрибута:',
	'can_be_author' => "Выбранный пользователь не может быть автором",
	'current_password' => "Текущий пароль недействителен.",

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
	'can_be_author' => [
	'accept' => "Выбранный автор недействителен.",
	],
	'current_password' => [
	'accept' => "Текущий пароль недействителен.",
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

'attributes'           => [
	'name'                  => 'Имя',
	'username'              => 'Имя пользователя',
	'email'                 => 'Электронная почта',
	'first_name'            => 'Имя',
	'last_name'             => 'Фамилия',
	'current_password'      => 'Текущий пароль',
	'password'              => 'Пароль',
	'password_confirmation' => 'Подтверждение пароля',
	'city'                  => 'Город',
	'country'               => 'Страна',
	'address'               => 'Адрес',
	'phone'                 => 'Телефон',
	'mobile'                => 'Мобильный',
	'age'                   => 'Возраст',
	'sex'                   => 'пол',
	'gender'                => 'Пол',
	'day'                   => 'День',
	'month'                 => 'Месяц',
	'year'                  => 'Год',
	'hour'                  => 'час',
	'minute'                => 'Минута',
	'second'                => 'Второй',
	'title'                 => 'Название',
	'content'               => 'Содержание',
	'description'           => 'Описание',
	'excerpt'               => 'Отрывок',
	'date'                  => 'Дата',
	'time'                  => 'Время',
	'available'             => 'Недоступен',
	'size'                  => 'Размер',
	'posted_at'             => 'Postedat',
	'author_id'             => 'Автор',
	'post_id'               => 'Post',
	'thumbnail_id'          => 'Миниатюра',
],

'errors' => ": count error: |: count errors:"

];
