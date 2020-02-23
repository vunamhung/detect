<?php

namespace vnh;

$GLOBALS['vnh_mobile_detect'] = new \Mobile_Detect;

function is_mobile() {
	return $GLOBALS['vnh_mobile_detect']->isMobile();
}

function is_tablet() {
	return $GLOBALS['vnh_mobile_detect']->isTablet();
}

function is_desktop() {
	return !is_mobile() && !is_tablet();
}
