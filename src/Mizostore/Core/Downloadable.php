<?php namespace Mizostore\Core;

/**
 * Sellable Interface
 *
 * All entities that can be sold through the mizostore online store will have
 * to implement this interface.. ... test doc
 *
 * @since 0.0.1
 * @version 1.0.0 ??
 * @package Mizostore\Core
 */
interface Downloadable{
    public function download();
    public function checkDownloadPermission(); //Just examples
    public function getUrl(); //Just examples
}
