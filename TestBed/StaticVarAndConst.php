<?php
// StaticVarAndConst.php
class StaticVarAndConst{
    const myConst = 0;
    private static $myVar = 1;

    public function inc()
    {
        return self::$myVar++;
    }
}

$a = new StaticVarAndConst();
$b = new StaticVarAndConst();

echo StaticVarAndConst::myConst, PHP_EOL;
echo $a->inc(), PHP_EOL;
echo $b->inc(), PHP_EOL;