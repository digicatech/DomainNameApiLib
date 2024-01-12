<?php
use digicatech\DomainNameApiLib\DomainNameApiLib;
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 15:19
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */


require_once __DIR__.'/../src/DomainNameApiLib.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib($username,$password);

/**
 * Renew domain
 * @param string $DomainName
 * @param int $Period
 * @return array
 */
$renew=$dna->Renew('domainhakkinda.com',2);
print_r($renew);

/**
 * Array
(
    [result] => OK
    [data] => => Array
        (
            [ExpirationDate] =>2025-03-04 00:00:00
   )

)
 */
