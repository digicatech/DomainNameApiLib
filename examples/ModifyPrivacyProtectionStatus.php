<?php
use digicatech\DomainNameApiLib\DomainNameApiLib;
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 15:56
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */
require_once __DIR__.'/../src/DomainNameApiLib.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib($username,$password);

/**
 * Modify privacy protection status of domain
 * @param string $DomainName
 * @param bool $Status
 * @param string $Reason
 * @return array
 */
$privacy = $dna->ModifyPrivacyProtectionStatus('domainhakkinda.com', true/**or false*/, 'owners optional comment');
print_r($privacy);

/**
 * Array
(
    [result] => OK
    [data] => => Array
        (
            [PrivacyProtectionStatus] =>trıe
   )
)
 */


