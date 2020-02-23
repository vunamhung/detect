<?php

namespace vnh;

$vnh_mobile_detect = new \Mobile_Detect;

function detect(){
	global $vnh_mobile_detect;

	return $vnh_mobile_detect;
}

function is_mobile() {
	return detect()->isMobile();
}

function is_tablet() {
	return detect()->isTablet();
}

function is_desktop() {
	return !is_mobile() && !is_tablet();
}
