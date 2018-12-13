<?php

echo array_sum(array_map('intval', explode(' ',strrev(readline()))));
