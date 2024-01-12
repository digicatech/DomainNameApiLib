<?php
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 15:23
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */
require_once __DIR__.'/../src/DomainNameAPI.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib\DomainNameAPI($username,$password);
/**
 * Sync from registry, domain information will be updated from registry
 * @param string $DomainName
 * @return array
 */
$renew=$dna->SyncFromRegistry('domainhakkinda.com');
print_r($renew);
