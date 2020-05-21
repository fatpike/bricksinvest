<?php

add_filter('gform_validation_message', 'change_message', 10, 2);
function change_message($message, $form)
{
    return "<div class='validation_error'>Valideren mislukt - " . $form['title'] . '</div>';
}

add_filter('gform_validation_message', function ($message, $form) {
    if (gf_upgrade()->get_submissions_block()) {
        return $message;
    }

    $message = "<div class='validation_error'><p>Er zijn niet genoeg velden ingevuld.</p>";
    $message .= '<ul>';


    foreach ($form['fields'] as $field) {
        if ($field->failed_validation) {
//            $message .= sprintf('<li>%s - %s</li>', GFCommon::get_label($field), $field->validation_message);
        }
    }

    $message .= '</ul></div>';

    return $message;
}, 10, 2);

add_filter('gform_field_validation', function ($result, $value, $form, $field) {
    if ($field->type == 'name') {

        // Input values
        $first = rgar($value, $field->id . '.3');

        if (empty($first) && !$field->get_input_property('3', 'isHidden')
        ) {
            $result['is_valid'] = false;
            $result['message'] = empty($field->errorMessage) ? __('Geef je volledige naam op', 'gravityforms') : $field->errorMessage;
        } else {
            $result['is_valid'] = true;
            $result['message'] = '';
        }
    }

    return $result;

}, 10, 4);

add_filter('gform_field_validation', 'validate_phone', 10, 4);
function validate_phone($result, $value, $form, $field)
{
    $pattern = "/^((\+|00(\s|\s?\-\s?)?)31(\s|\s?\-\s?)?(\(0\)[\-\s]?)?|0)[1-9]((\s|\s?\-\s?)?[0-9])((\s|\s?-\s?)?[0-9])((\s|\s?-\s?)?[0-9])\s?[0-9]\s?[0-9]\s?[0-9]\s?[0-9]\s?[0-9]$/";
    if ($field->type == 'phone' && $field->phoneFormat != 'standard' && !preg_match($pattern, $value)) {
        $result['is_valid'] = false;
        $result['message'] = 'Voer een geldig telefoon nummer in    ';
    }

    return $result;
}

add_filter('gform_field_validation', function ($result, $value, $form, $field) {
    if ($field->get_input_type() === 'email' && $result['is_valid']) {
        $request_url = add_query_arg(
            array(
                'email' => $value,
                'apikey' => '8dc174e0661bf0c6294f975793042a6af60a1119f19e331b2957b5a7bca5',
            ),
            'http://api.quickemailverification.com/v1/verify'
        );

        $response = wp_remote_get($request_url);
        $response_json = wp_remote_retrieve_body($response);
        $response_array = json_decode($response_json, 1);

        if (rgar($response_array, 'result') !== 'valid') {
            $result['is_valid'] = false;
            $result['message'] = 'Email is invalid';
        }
    }

    return $result;
}, 10, 4);

add_filter('gform_field_validation_224_1', 'custom_address_validation', 10, 4);
function custom_address_validation($result, $value, $form, $field)
{
    //address field will pass $value as an array with each of the elements as an item within the array, the key is the field id
    if (!$result['is_valid'] && $result['message'] == 'Dit veld is verplicht, vul het a.u.b uw adres in.') {
        //address failed validation because of a required item not being filled out
        //do custom validation
        $street = rgar($value, $field->id . '.1');
        $street2 = rgar($value, $field->id . '.2');
        $city = rgar($value, $field->id . '.3');
        $state = rgar($value, $field->id . '.4');
        $zip = rgar($value, $field->id . '.5');
        $country = rgar($value, $field->id . '.6');
        //check to see if the values you care about are filled out
        if (empty($street) || empty($city) || empty($state)) {
            $result['is_valid'] = false;
            $result['message'] = 'Dit veld is verplicht, vul het a.u.b uw adres in.';
        } else {
            $result['is_valid'] = true;
            $result['message'] = '';
        }
    }

    return $result;
}