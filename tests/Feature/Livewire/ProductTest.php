<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Product::class)
            ->assertStatus(200);
    }
}
