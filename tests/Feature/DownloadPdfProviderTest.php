<?php

namespace Tests\Feature;

use App\Models\Provider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DownloadPdfProviderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_generate_pdf_provider_list(): void
    {
        //Arrange:

        //Act:
        $response = $this->get('/providers/download-pdf');

        $response->assertStatus(404);
    }
}
