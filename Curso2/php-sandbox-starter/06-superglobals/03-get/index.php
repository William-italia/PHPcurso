<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// var_dump($_GET);

setcookie('name', 'william', time() + 2 * 24 * 60 * 60);
setcookie('curso', 'PHP', strtotime('+5days'));