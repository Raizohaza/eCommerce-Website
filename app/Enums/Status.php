<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Status extends Enum
{
       //New, Wait, Canceled,  Processing, Shipping,     Completed 
    const Newer =   1;
    const Wait =   2;
    const Canceled = 3;
    const Processing = 4;
    const Shipping = 5;
    const Completed = 6;
}
