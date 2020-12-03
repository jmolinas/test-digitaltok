<?php
use DTApi\Helpers\TeHelper;
use Carbon\Carbon;

class TeHelperTests extends TestCase
{
    public function testsWillExpireAt()
    {
        $difLess90 = TeHelper::willExpireAt('2020-11-27', '2020-11-26');
        $case1 = Carbon::parse('2020-11-27')->format('Y-m-d H:i:s');

        $difFinal = TeHelper::willExpireAt('2020-11-27', '2020-11-21');
        $case2 = Carbon::parse('2020-11-27')->subHours(48)->format('Y-m-d H:i:s');

        $this->assertEquals($difLess90, $case1);
        $this->assertEquals($difFinal, $case2);
    }
}
