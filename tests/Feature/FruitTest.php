<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FruitTest extends TestCase
{
    
    public function test_update_fruit_successful_with_color()
    {
    
        $response = $this->json('PUT', 'api/fruit/5',
                    [
                        'name'=> 'Níspero editado color',
                        'size'=> 'Pequeño',
                        'color'=> 'Naranja'
                    ]);

        $this->assertEquals($response['name'], 'Níspero editado color');
        $this->assertEquals($response['size'], 'Pequeño');
        $this->assertEquals($response['color'], 'Naranja');
        $response->assertStatus(200);
        
    }

    public function test_update_fruit_successful_without_color()
    {
    
        $response = $this->json('PUT', 'api/fruit/5',
                    [
                        'name'=> 'Níspero editado',
                        'size'=> 'Pequeño'
                    ]);

        $this->assertEquals($response['name'], 'Níspero editado');
        $this->assertEquals($response['size'], 'Pequeño');
        $this->assertEquals($response['color'], null);
        $response->assertStatus(200);
        
    }

    public function test_update_fruit_failed()
    {
    
        $response = $this->json('PUT', 'api/fruit/5',
                    [
                        'name'=> 'Níspero mal editado',
                        'size'=> 'Peque',
                        'color'=> 'Naranja'
                    ]);

        $this->assertEquals($response['message'], 'size not allowed');
        $response->assertStatus(400);
    }
}
