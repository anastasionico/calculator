<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\CalculatorController;


class CalculatorTest extends TestCase
{
	/** @test */
	public function user_can_see_calculator()
    {
   	    // Given a visitor
  	    // When he sends a GET request to /calculator
  	    $response = $this->get('/calculator');

        // Then he must be able to see the homepage 
	   	$response->assertStatus(200);
    }   

	/** @test */
	public function user_send_right_number_format()
    {
   	    // Given a visitor
  	    // When he sends 'number' in a string format
  	    $response = $this->post('/calculate', [
			'number' => "Adder",
	    ]);
		
  	    // Then the controller should respond with a 3xx and an error in number
	   	$response->assertStatus(302);

	   	$response->assertSessionHasErrors('number');
    }       

    /** @test */
	public function user_send_right_result_format()
    {
   	    // Given a visitor
  	    // When he sends 'result' in a string format
  	    $response = $this->post('/calculate', [
			'result' => "Adder",
	    ]);
		
  	    // Then the controller should respond with a 3xx and an error in number
	   	$response->assertStatus(302);

	   	$response->assertSessionHasErrors('result');
    }       

    /** @test */
	public function user_send_right_operation_format()
    {
   	    // Given a visitor
  	    // When he sends 'operation' in a number format
  	    $response = $this->post('/calculate', [
			'operation' => 22,
	    ]);
		
  	    // Then the controller should respond with a 3xx and an error in number
	   	$response->assertStatus(302);

	   	$response->assertSessionHasErrors('operation');
    }       

}
