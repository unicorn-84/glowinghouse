<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManageIndexPageTest extends TestCase
{
  /** @test */
  public function users_can_view_an_index_page()
  {
    $this->withoutExceptionHandling();
    $response = $this->get('/');
    $response->assertOk();
  }
}
