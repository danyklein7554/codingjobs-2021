<?php

if (isset($_COOKIE['viewed'])) {
    echo 'You have visited the page.';
} else {
    echo 'You haven\'t visited the page';
}
