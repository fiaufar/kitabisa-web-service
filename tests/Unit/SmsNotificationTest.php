<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SmsNotificationTest extends TestCase
{
    use WithFaker;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $data = [
            'dstPhoneNumber' => $this->faker->phoneNumber,
            'message' => $this->faker->asciify('********************')
        ];

        $this->postJson(route('sms-notif'), $data)->assertStatus(200);
    }
}
