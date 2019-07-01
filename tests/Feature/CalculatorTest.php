<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatorTest extends TestCase
{
	/** @test */
	public function calculator_return_the_right_number_on_sum()
	{    
	
		// Given 2 numbers and a operation
		// When the user send a post request
		$response = $this->post('/calculate', [
			'result' => 22,
	    	'number' => 10,
	    	'operation' => 'Adder',
		]);
	
		// then the result should be correct
		$response->assertViewHas('result', 32);
		
	}

	/** @test */
	public function calculator_return_the_right_number_on_subtraction()
	{    
	
		// Given 2 numbers and a operation
		// When the user send a post request
		$response = $this->post('/calculate', [
			'result' => 55,
	    	'number' => 12,
	    	'operation' => 'Subtracter',
		]);
	
		// then the result should be correct
		$response->assertViewHas('result', 43);
		
	}

	/** @test */
	public function calculator_return_the_right_number_on_multiplication()
	{    
	
		// Given 2 numbers and a operation
		// When the user send a post request
		$response = $this->post('/calculate', [
			'result' => 35,
	    	'number' => 16,
	    	'operation' => 'Multiplier',
		]);
	
		// then the result should be correct
		$response->assertViewHas('result', 560);
		
	}

	/** @test */
	public function calculator_return_the_right_number_on_division()
	{    
	
		// Given 2 numbers and a operation
		// When the user send a post request
		$response = $this->post('/calculate', [
			'result' => 50,
	    	'number' => 10,
	    	'operation' => 'Divider',
		]);
		
		// then the result should be correct
		$response->assertViewHas('result', 5);
		
	}
}
