<?php

use PHPUnit\Framework\TestCase;


class TestCase extends TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
     public function setUp()
     {
        parent::setUp();
        $this->prepareForTests();
     }

     public function prepareForTests()
     {
         Config::set('database.default', 'sqlite');
         Artisan::call('migrate:refresh');
     }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
