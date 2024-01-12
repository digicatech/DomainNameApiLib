<?php
use digicatech\DomainNameApiLib\DomainNameApiLib;
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 15:23
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */
require_once __DIR__.'/../src/DomainNameApiLib.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib($username,$password);
/**
 * Sync from registry, domain information will be updated from registry
 * @param string $DomainName
 * @return array
 */
$renew=$dna->SyncFromRegistry('domainhakkinda.com');
print_r($renew);
