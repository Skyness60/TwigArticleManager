<?php

$repository = new EventRepository();

$events = $repository->getLatestArticles($db, 5, true);
  
require("view/homepage.php");