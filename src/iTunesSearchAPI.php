<?php

final class iTunesSearchAPI {

  const BASE_URL = 'https://itunes.apple.com/';
  
  /**
   * search API
   * 
   * @param string $term
   * @param array  $parameters
   * 
   * @return array
   */
  public static function search($term, array $parameters) {
    $parameters['term'] = $term;
    return self::request('search', $parameters);
  }

  /**
   * lookup API
   * 
   * @param array $id
   * @param array $parameters
   * 
   * @return array
   */
  public static function lookup(array $id, array $parameters) {
    return self::request('lookup', array_merge($id, $parameters));
  }

  /**
   * send request
   * 
   * @param string $method
   * @param array  $parameters
   * 
   * @return object
   */
  private static function request($method, array $parameters) {
    $response = file_get_contents(self::BASE_URL . $method . '?' . http_build_query($parameters));
		return json_decode(mb_convert_encoding($response, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'), true)["results"];
  }
}