<?php

class TheFourthAge {
	
	public static function today() 
	{
		$today = time();
		$year = (int) date('Y');
		$day = (int) date('j');
		$wotYear = $year - 2011;

		if($today >= mktime(0,0,0,1,1,$year) && $today <= mktime(23,59,59,1,18,$year)) {
			//1-18 January	11-28 Taisham	 +10
			$month = 'Taisham';
			$day += 10;
		}
		else if($today >= mktime(0,0,0,1,19,$year) && $today <= mktime(23,59,59,1,31,$year)) {
			//19-31 January	1-13 Jumara	 -18
			$month = 'Jumara';
			$day -= 18;
		}
		else if($today >= mktime(0,0,0,2,1,$year) && $today <= mktime(23,59,59,2,15,$year)) {
			//1-15 February	14-28 Jumara	 +13
			$month = 'Jumara';
			$day += 13;
		}
		else if($today >= mktime(0,0,0,2,16,$year) && $today <= mktime(23,59,59,2,28,$year)) {
			//16-28 February	1-13 Saban	 -15
			$month = 'Saban';
			$day -= 15;
		}
		else if($today >= mktime(0,0,0,3,1,$year) && $today <= mktime(23,59,59,3,15,$year)) {
			//1-15 March	14-28 Saban	 +13
			$month = 'Saban';
			$day += 13;
		}
		else if($today >= mktime(0,0,0,3,16,$year) && $today <= mktime(23,59,59,3,31,$year)) {
			//16-31 March	1-16 Aine	 -15
			$month = 'Aine';
			$day -= 15;
		}
		else if($today >= mktime(0,0,0,4,1,$year) && $today <= mktime(23,59,59,4,12,$year)) {
			//1-12 April	17-28 Aine	 +16
			$month = 'Aine';
			$day += 16;
		}
		else if($today >= mktime(0,0,0,4,13,$year) && $today <= mktime(23,59,59,4,30,$year)) {
			//13-30 April	1-18 Adar	 -12
			$month = 'Adar';
			$day -= 12;
		}
		else if($today >= mktime(0,0,0,5,1,$year) && $today <= mktime(23,59,59,5,10,$year)) {
			//1-10 May	19-28 Adar	 +18
			$month = 'Adar';
			$day += 18;
		}
		else if($today >= mktime(0,0,0,5,11,$year) && $today <= mktime(23,59,59,5,31,$year)) {
			//11-31 May	1-21 Saven	 -10
			$month = 'Saven';
			$day -= 10;
		}
		else if($today >= mktime(0,0,0,6,1,$year) && $today <= mktime(23,59,59,6,7,$year)) {
			//1-7 June	22-28 Saven	 +21
			$month = 'Saven';
			$day += 21;
		}
		else if($today >= mktime(0,0,0,6,8,$year) && $today <= mktime(23,59,59,6,20,$year)) {
			//8-20 June	1-13 Amadaine	 -7
			$month = 'Amadaine';
			$day -= 7;
		}
		else if($today >= mktime(0,0,0,6,21,$year) && $today <= mktime(23,59,59,6,21,$year)) {
			//21st June	SUNDAY	n/a
			$month = 'Sunday';
			$day = 0;
		}
		else if($today >= mktime(0,0,0,6,22,$year) && $today <= mktime(23,59,59,6,30,$year)) {
			//22-30 June	14-22 Amadaine	 -8
			$month = 'Amadaine';
			$day -= 8;
		}
		else if($today >= mktime(0,0,0,7,1,$year) && $today <= mktime(23,59,59,7,6,$year)) {
			//1-6 July	23-29 Amadaine	 +22
			$month = 'Amadaine';
			$day += 22;
		}
		else if($today >= mktime(0,0,0,7,7,$year) && $today <= mktime(23,59,59,7,31,$year)) {
			//7-31 July	1-25 Tammaz	 -6
			$month = 'Amadaine';
			$day -= 6;
		}
		else if($today >= mktime(0,0,0,8,1,$year) && $today <= mktime(23,59,59,8,3,$year)) {
			//1-3 August	26-28 Tammaz	 +25
			$month = 'Tammaz';
			$day += 25;
		}
		else if($today >= mktime(0,0,0,8,4,$year) && $today <= mktime(23,59,59,8,31,$year)) {
			//4-31 August	1-28 Maigdhal	 -3
			$month = 'Maigdal';
			$day -= 3;
		}
		else if($today >= mktime(0,0,0,9,1,$year) && $today <= mktime(23,59,59,9,28,$year)) {
			//1-28 September	1-28 Choren	 +0
			$month = 'Choren';
			$day = $day;
		}
		else if($today >= mktime(0,0,0,9,29,$year) && $today <= mktime(23,59,59,9,30,$year)) {
			//29-30 September	1-2 Shaldine	 -28
			$month = 'Shaldine';
			$day -= 28;
		}
		else if($today >= mktime(0,0,0,10,1,$year) && $today <= mktime(23,59,59,10,26,$year)) {
			//1-26 October	3-28 Shaldine	 +2
			$month = 'Shaldine';
			$day += 2;
		}
		else if($today >= mktime(0,0,0,10,27,$year) && $today <= mktime(23,59,59,10,31,$year)) {
			//27-31 October	1-5 Nesan	 -26
			$month = 'Nesan';
			$day -= 26;
		}
		else if($today >= mktime(0,0,0,11,1,$year) && $today <= mktime(23,59,59,11,23,$year)) {
			//1-23 November	6-28 Nesan	 +5
			$month = 'Nesan';
			$day += 5;
		}
		else if($today >= mktime(0,0,0,11,24,$year) && $today <= mktime(23,59,59,11,30,$year)) {
			//24-30 November	1-7 Danu	 -23
			$month = 'Danu';
			$day -= 23;
		}
		else if($today >= mktime(0,0,0,12,1,$year) && $today <= mktime(23,59,59,12,21,$year)) {
			//1-21 December	8-28 Danu	 +7
			$month = 'Danu';
			$day += 7;
		}
		else if($today >= mktime(0,0,0,12,22,$year) && $today <= mktime(23,59,59,12,31,$year)) {
			//22-31 December	1-10 Taisham	 -21
			$month = 'Taisham';
			$day -= 21;
			$wotYear++;
		}

		$date = $month.' '.$day.', '. $wotYear.' ATG';

		return $date;
	}
}