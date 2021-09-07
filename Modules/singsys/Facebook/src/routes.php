<?php

Route::get('/facebook', function () {
	return FBM::getCreds();
});