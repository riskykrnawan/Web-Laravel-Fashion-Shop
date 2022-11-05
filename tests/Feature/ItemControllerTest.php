<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\Request;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ItemControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/admin/products')
            ->assertStatus(302);
    }
    public function testCreate()
    {
        $this->get('/admin/products/create')
            ->assertStatus(302);
    }
    public function testStore()
    {
        $img = UploadedFile::fake()->image("item.png");
        $this->post('/admin/products/store', [
            'id' => '999',
            'name' => 'sebuah barang',
            'description' => 'sebuah deskripsi barang',
            'stock' => 999,
            'price' => 999,
            'photo' => $img
        ])->assertStatus(302);
    }
    public function testShow()
    {
        $this->get('/admin/products/show/999')
            ->assertStatus(302);
    }

    public function testEdit()
    {
        $this->get('/admin/products/edit/999')
            ->assertStatus(302);
    }

    public function testUpdate() {
        {
            $img = UploadedFile::fake()->image("item.png");
            $this->post('/admin/products/update', [
                'id' => '999',
                'name' => 'sebuah barang sudah terupdate',
                'description' => 'sebuah deskripsi barang sudah terupdate',
                'stock' => 998,
                'price' => 998,
                'photo' => $img,
                'newPhoto' => $img
            ])->assertStatus(302);
        }
    }

    public function testShowAfterUpdate()
    {
        $this->get('/admin/products/show/999')
            ->assertStatus(302);
    }
    public function testDelete()
    {
        $this->get('/admin/products/delete/999')
            ->assertStatus(302);
    }
}
