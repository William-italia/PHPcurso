<?php

$favoriteColor;
$secondFavoriteColor = 'green';

// $color = isset($favoriteColor) ? $favoriteColor : 'blue';
$color = $favoriteColor ?? 'yellow';

$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'gray';

echo $color2;
