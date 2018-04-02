<?php
/**
 * This function will auto-increment a hex while
 * adding gap. Can be used to generate data that
 * can be imported to excel.
 *
 * @source: https://github.com/roahnosh/vitacheat
 *
 * @hex (string): null
 * @count (int): 10
 * @gap (int): null
 *
 * @return $hex
 */
function hex_generator( $hex, $count = 10, $gap ) {
	for ( $i=0; $i<=$count; $i+=$gap ) {
		echo strtoupper( dechex( hexdec( $hex ) + $i ) )."<br>";
	}
}

hex_generator( "88A0F49E", 10000, 120 );
