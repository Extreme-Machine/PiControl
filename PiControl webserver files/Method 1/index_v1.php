<?php 
exec("gpio -g mode 0 out");
exec("gpio -g mode 2 out");
exec("gpio -g mode 3 out");
if (isset($_GET['pin6'])) {	
	if($_GET['pin6'] == 1) {
		exec("gpio -g write 6 1");// pin 0 in wiring pi is gpio 17
	} else {
		exec("gpio -g write 6 0");
	}
}
if(isset($_GET['pin13'])) {
	if($_GET['pin13'] == 1) {
		exec("gpio -g write 13 1");// pin 2 in wiring pi is gpio 27
	} else {
		exec("gpio -g  write 13 0");
	}
}
if(isset($_GET['pin19'])) {
	if($_GET['pin19'] == 1) {
		exec("gpio -g write 19 1");// pin 3 in wiring pi is gpio 22
	} else {
		exec("gpio -g write 19 0");
	}
}
if(isset($_GET['pin26'])) {
	if($_GET['pin26'] == 1) {
		exec("gpio -g write 26 1");// pin 3 in wiring pi is gpio 22
	} else {
		exec("gpio -g write 26 0");
	}
}
?>