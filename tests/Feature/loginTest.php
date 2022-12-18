<?php

namespace Tests\Feature;

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class loginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
       Log::info("Hello Info");
       Log::warning("Heloo Warning");
       Log::error("Hello Error");
       Log::critical("Hello Critical");
       self::assertTrue(true);
    }

    // public function testlogerror()
    // {
    //     Log::error("Hello Error",["Eroor"=>"Amandio"]);
    //     self::assertTrue(true);
    // }

    public function testlogfile(){

        $logs = Log::channel('file');
        $logs->info('Hello info');
        $logs->critical('Hello critical');
        $logs->error('Hello error');
        self::assertTrue(true);

    }


}