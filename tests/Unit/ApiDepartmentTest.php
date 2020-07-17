<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiDepartmentTest extends TestCase
{
    /**
     * Single department.
     *
     * @return void
     */
    public function testGetDepartment()
    {
        $response = $this->get('/api/departments/1');
        $response->assertSuccessful();
        $response->assertSee('department');
        $response->assertSee('TEO');
    }
}
