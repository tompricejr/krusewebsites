<?php
return [
    'apiKey' => getenv('MAILCHIMP_API_KEY') ?: '',
    'doubleOptIn' => false,
];
