<?php

/**
 * Plugin Name: Core Web Vitals Tracker
 * Version: 0.01
 * Author: Dimitri
 * Description: Simple way to keep track of your core web vitals.
 *
 */

$mobile = 0;
$desktop = 0;
$test_post_URL = "";
$gpsi_URL = "https://pagespeed.web.dev/report?url=";
$full_test_URL = check_post_cwv($gpsi_URL, $test_post_URL);

function check_post_cwv($gpsi_URL, $test_post_URL)
{
    return $gpsi_URL . $test_post_URL;
};
