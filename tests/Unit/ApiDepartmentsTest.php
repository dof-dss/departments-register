<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiDepartmentsTest extends TestCase
{
    /**
     * All departments.
     *
     * @return void
     */
    public function testGetAllDepartments()
    {
        $response = $this->get('/api/departments');
        $response->assertSuccessful();
        $response->assertSee('departments');
        $response->assertSee('TEO');
        $response->assertSee('DAERA');
        $response->assertSee('DfC');
        $response->assertSee('DfE');
        $response->assertSee('DE');
        $response->assertSee('DoF');
        $response->assertSee('DoH');
        $response->assertSee('DfI');
    }
}
