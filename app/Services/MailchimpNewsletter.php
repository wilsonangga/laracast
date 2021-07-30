<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    public function __construct(ApiClient $client){

    }

    public function subscribe(string $email, string $list = null){

        $list ??= config('services.mailchimp.lists.subscribers');

        $response = $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
        print_r($response);
    }
}
