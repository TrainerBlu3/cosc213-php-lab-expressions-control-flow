<?php
// Input via query string: e.g., ?role=admin&day=Sat&code=404
$role = $_GET['role'] ?? 'guest';
$day = $_GET['day'] ?? 'Mon';
$code = (int)($_GET['code'] ?? 200);

// A) Role greeting with if/elseif/else
if ($role === 'admin') {
  echo "Welcome, admin\n"
