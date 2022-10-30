<?php

namespace Tests;

use Database\Seeders\CarSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->runSeeders();
	}

	private function runSeeders()
	{
		$this->seed([
			UserSeeder::class,
			CarSeeder::class
		]);
	}
}
