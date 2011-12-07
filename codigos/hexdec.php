<?php
#Ejemplo funcion convierte una direccion MAC a numeros hexadecimales.

function get_mac_decimal($mac) {
    $clear_mac = preg_replace('/[^0-9A-F]/i','',$mac);
    $mac_decimal = array();
    for ($i = 0; $i < strlen($clear_mac); $i += 2 ):
        $mac_decimal[] = hexdec(substr($clear_mac, $i, 2));
    endfor;
    return implode('.',$mac_decimal);
}

/**
 * Convert a hexa decimal color code to its RGB equivalent
 *
 * Code base: http://www.php.net/manual/en/function.hexdec.php#99478
 * 
 * @param string $hexStr (hexadecimal color value)
 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
 * 
 */                                                                                                
function hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace('/[^0-9a-f]/i', '', $hexStr); // Gets a proper hex string
    //if shorthand notation, need some string manipulations
    if(strlen($hexStr) == 3)
		$hexStr = preg_replace('/([0-9A-F]{1})/i','$1$1',$hexStr);
    if ( strlen($hexStr) != 6) {//Invalid hex color code
		return false;
    }
    $rgbArray = array();
    $colorVal = hexdec($hexStr);
	$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
	$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
	$rgbArray['blue'] = 0xFF & $colorVal;
	// returns the rgb string or the associative array
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray;
}

print_r(hex2RGB("#FF0"));
print_r(hex2RGB("#FFFF00"));
echo hex2RGB("#FF0", true)."\n";
echo hex2RGB("#FF0", true, ":")."\n";

echo get_mac_decimal('b4:82:fe:e5:03:fa')."\n";

