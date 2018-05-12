<?php

session_start();

//unset($_SESSION['count']);
session_destroy();

echo '<p>Destroy session</p>';