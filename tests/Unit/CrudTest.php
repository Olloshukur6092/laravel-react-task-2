<?php

namespace Tests\Unit;

use Tests\TestCase;

class CrudTest extends TestCase
{
    private const URL_GET_POST = "api/product";
    private const URL_EDIT = "api/product/9/edit";
    private const URL_UPDATE = "api/product/9";
    private const URL_DELETE = "api/product/9";

   
    // this is method add data test
    // public function test_crud_add_data()
    // {
    //     $response = $this->post(self::URL_GET_POST, [
    //         'name' => 'test',
    //         'type' => 'test',
    //         'price' => '12',
    //     ]);

    //     $response->assertStatus(200);
    // }

    // // this is method get all data :test
    // public function test_crud_get_all_data()
    // {
    //     $response = $this->get(self::URL_GET_POST);
    //     $response->assertStatus(200);
    // }

    // // this is method edit data :test
    // public function test_crud_edit_data()
    // {
    //     $response = $this->get(self::URL_EDIT);
    //     $response->assertStatus(200);
    // }

    // // this is method update data :test
    // public function test_crud_update_data()
    // {
    //     $response = $this->put(self::URL_UPDATE, [
    //         'name' => 'Test Update',
    //         'type' => 'Test update',
    //         'price' => '123',
    //     ]);

    //     $response->assertStatus(200);
    // }

    // // this is method delete data :test
    // public function test_crud_delete_data()
    // {
    //     $response = $this->delete(self::URL_DELETE);
    //     $response->assertStatus(200);
    // }
    
}
