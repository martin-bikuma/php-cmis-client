<?php

namespace Dkd\PhpCmis;

use League\Uri\Components\Query;

class Utils {

  public static function modifyUriQuery(&$uri, $pairs) {
    $query = Query::fromUri($uri);
    foreach ($pairs as $key => $value) {
      $query = $query->withPair($key, $value);
    }
    $uri = $uri->withQuery($query->toString());
  }

}