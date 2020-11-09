<?php
    function CalcSecurityCode($serial_no, &$sCode) {
        $serial_no = str_replace("-", "", $serial_no);
        if (!is_numeric($serial_no)) {
            return -1;
        }
        $buf1 = substr($serial_no, 0, 13);
        $buf2 = $buf1 - intval( $buf1 / 999 ) * 999;
        $buf2 = round($buf2, 4);
        $buf3 = ConvertCInt(substr($serial_no, 6, 1)) + 1;
        $buf4 = $buf2 * $buf3;
        $buf4 = substr((string)($buf4), -3);
        $sCode = substr("000".(string)($buf4), -3);
        return 0;
    }

    function ConvertCInt($value) {
        $floor = floor($value);
        if (($value - $floor) > 0.5) {
            return ceil($value);
        }
        if (($value - $floor) < 0.5) {
            return $floor;
        }
        if (($value - $floor) == 0.5) {
            if (($floor % 2) == 0) {
                return $floor;
            }
            return ceil($value);
        }
    }

    $a = (1 + 2 + 1 + 0 + 9 + 0 + 0) * 3;
    $b = 0 + 1 + 1 + 0 + 5 + 0;
    $c = (string) ($a + $b);
    $c = substr($c, -1);
    $d = 10 - $c;

    $serial = '102111' . $d . '095000';
    $sCode = "";
    $rc = CalcSecurityCode($serial, $sCode);
    $serial .= $rc;
    echo $serial;
?>