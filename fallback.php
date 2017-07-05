<?php

# @copyright Copyright 2017 Eric C. Weig 

# Legacy NKAA Pattern: /record.php?note_id=3035
# Omeka Pattern: /nkaa/items/show/3035

if (preg_match('/^\/record.php\?note\_id\=(.*)/', $_SERVER['REQUEST_URI'], $output_array)) {
    $id = $output_array[1];
    $path = "/nkaa/items/show/";
    $redirectCode = "301";
    $newURL = "$path$id";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }

# Legacy NKAA Pattern: /source.php?source_id=165
# Omeka Pattern: /nkaa/items/show/30000165

    elseif (preg_match('/^\/source.php\?source\_id\=(.*)/', $_SERVER['REQUEST_URI'], $output_array)) {
    $id = $output_array[1];
    $path = "/nkaa/items/show/";
    $redirectCode = "301";
    $gap = "30000";
    $newURL = "$path$gap$id";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /sources.php?sort_by=Z
# Omeka Pattern: /nkaa/references/nkaa-sources#Z

    elseif (preg_match('/^\/sources.php\?sort\_by\=(.*)/', $_SERVER['REQUEST_URI'], $output_array)) {
    $id = $output_array[1];
    $path = "/nkaa/references/nkaa-sources#";
    $redirectCode = "301";
    $newURL = "$path$id";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /all.php?sort_by=H
# Omeka Pattern: /nkaa/references/nkaa-items#H

    elseif (preg_match('/^\/all.php\?sort\_by\=(.*)/', $_SERVER['REQUEST_URI'], $output_array)) {
    $id = $output_array[1];
    $path = "/nkaa/references/nkaa-items#";
    $redirectCode = "301";
    $newURL = "$path$id";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /directors.php?sort_by=H
# Omeka Pattern: /nkaa/references/nkaa-usa-library-directors#H

    elseif (preg_match('/^\/directors.php\?sort\_by\=(.*)/', $_SERVER['REQUEST_URI'], $output_array)) {
    $id = $output_array[1];
    $path = "/nkaa/references/nkaa-usa-library-directors#";
    $redirectCode = "301";
    $newURL = "$path$id";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /aboutus.php
# Omeka Pattern: /nkaa/about

    elseif (preg_match('/^\/aboutus.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/about";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /index.php
# Omeka Pattern: /nkaa/

    elseif (preg_match('/^\/index.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /directors.php
# Omeka Pattern: /nkaa/references/nkaa-usa-library-directors

elseif (preg_match('/^\/directors.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/references/nkaa-usa-library-directors";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /all.php
# Omeka Pattern: /nkaa/references/nkaa-items

elseif (preg_match('/^\/all.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/references/nkaa-items";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /recent_changes.php
# Omeka Pattern: /nkaa/

elseif (preg_match('/^\/recent\_changes.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /sources.php
# Omeka Pattern: /nkaa/references/nkaa-sources

elseif (preg_match('/^\/sources.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/references/nkaa-sources";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
# Legacy NKAA Pattern: /director_about.php
# Omeka Pattern: /nkaa/about

elseif (preg_match('/^\/director\_about.php/', $_SERVER['REQUEST_URI'], $output_array)) {
    $path = "/nkaa/about";
    $redirectCode = "301";
    $newURL = "$path";
    header('Location: '.$newURL);
#    header('Location: ' . $newURL, true, $redirectCode);
    }
    
    else {
        $protocal = "https://";
        $domain = "ukscrc001.net";
        $path = "/default.html";
        $newURL = "$protocal$domain$path";
        header('Location: '.$newURL);
    }
    exit;
    
# Otherwise, do normal page
