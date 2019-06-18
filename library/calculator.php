<?php

// calculator shortcode
function calculator_func( $atts ) {
    
    // get the attributes
    $a = shortcode_atts( array(
        'amount' => '$6,000',
        'rate' => '5%',
        'rate_compare' => '0',
        'term' => '48m',
        'method' => ''
    ), $atts );


    // start building the calculator html/js

    // comparison calculator if applicable
    if ( $a['method'] == 'scratch' ) {
    	$a['amount'] = '';
    	$a['term'] = '';
    	$a['rate'] = '';
    $calculator_code = '<div class="calculator scratch one group">
	<div class="form">
		<div class="quarter"><label>Amount:<br>
			<input type="text" name="amount" class="amount" value="' . $a['amount'] . '" /></label></div>
		<div class="quarter"><label>Term (months):<br>
			<input type="text" name="term" class="term" value="' . $a['term'] . '" /></label></div>
		<div class="quarter"><label>Rate:<br>
			<input type="text" name="rate" class="rate" value="' . $a['rate'] . '" /></label></div>
		<div class="quarter"><label>Monthly Payment:<br>
			<input type="text" name="payment" class="payment" value="" /></label></div>
	</div>
</div><div class="calculator scratch two group">
	<div class="form">
		<div class="quarter"><label>Amount:<br>
			<input type="text" name="amount" class="amount" value="' . $a['amount'] . '" /></label></div>
		<div class="quarter"><label>Term (months):<br>
			<input type="text" name="term" class="term" value="' . $a['term'] . '" /></label></div>
		<div class="quarter"><label>Rate:<br>
			<input type="text" name="rate" class="rate" value="' . $a['rate'] . '" /></label></div>
		<div class="quarter"><label>Monthly Payment:<br>
			<input type="text" name="payment" class="payment" value="" /></label></div>
	</div>
</div><div class="calculator scratch three group">
	<div class="form">
		<div class="quarter"><label>Amount:<br>
			<input type="text" name="amount" class="amount" value="' . $a['amount'] . '" /></label></div>
		<div class="quarter"><label>Term (months):<br>
			<input type="text" name="term" class="term" value="' . $a['term'] . '" /></label></div>
		<div class="quarter"><label>Rate:<br>
			<input type="text" name="rate" class="rate" value="' . $a['rate'] . '" /></label></div>
		<div class="quarter"><label>Monthly Payment:<br>
			<input type="text" name="payment" class="payment" value="" /></div>
	</div>
</div>';
    } else if ( !empty( $a['rate_compare'] ) ) {
    $calculator_code = '<div class="calculator-compare group">
	<div class="half form">
		<input type="hidden" class="rate_compare" value="' . $a['rate_compare'] . '" />
		<p><label>Amount:<br>
			<input type="text" name="amount" class="amount" value="' . $a['amount'] . '" /></label></p>
		<p><label>Term:<br>
			<input type="text" name="term" class="term" value="' . $a['term'] . '" /></label></p>
		<p><label>Rate:<br>
			<input type="text" name="rate" class="rate" value="' . $a['rate'] . '" /></label></p>
	</div>
	<div class="half">
		<p><label>Results:</label></p>
		<div class="results"></div>
	</div>
</div>';
    } else {
    $calculator_code = '<div class="calculator-loan group">
	<div class="half form">
		<p><label>Amount:<br>
			<input type="text" class="amount" value="' . $a['amount'] . '" /></label></p>
		<p><label>Term:<br>
			<input type="text" class="term" value="' . $a['term'] . '" /></label></p>
		<p><label>Rate:<br>
			<input type="text" class="rate" value="' . $a['rate'] . '" /></label></p>
	</div>
	<div class="half">
		<p><label>Results:</label></p>
		<div class="results"></div>
	</div>
</div>';
    }

    return $calculator_code;
}
add_shortcode( 'calculator', 'calculator_func' );

?>