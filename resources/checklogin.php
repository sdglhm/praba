<?php
if (!$_SESSION['logged']) {
	header('Location: login.php');
}