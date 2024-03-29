<?php
use digicatech\DomainNameApiLib\DomainNameApiLib;
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 15:39
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */
require_once __DIR__.'/../src/DomainNameApiLib.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib($username,$password);

/**
 * Transfer Domain
 * @param string $DomainName
 * @param string $AuthCode
 * @param int $Period
 * @return array
 */
$result = $dna->Transfer('testdomain859.com', '5b3}R6Qq',3);
print_r($result);

/**
 * Array
(
    [result] => OK
)
 */
