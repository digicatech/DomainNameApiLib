<?php
/**
 * Created by PhpStorm.
 * User: bunyaminakcay
 * Project name php-dna
 * 4.03.2023 14:32
 * Bünyamin AKÇAY <bunyamin@bunyam.in>
 */
require_once __DIR__.'/../src/DomainNameAPI.php';

$username = 'test1.dna@apiname.com';
$password = 'FsUvpJMzQ69scpqE';

$dna = new DomainNameApiLib\DomainNameAPI($username,$password);

/**
 * Enable Theft Protection Lock for domain
 * @param string $DomainName
 * @return array
 */
$lock=$dna->EnableTheftProtectionLock('domainhakkinda.com');
print_r($lock);
