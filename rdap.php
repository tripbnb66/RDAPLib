<?php
include_once __DIR__ . '/../settings.php';

use Juanparati\RDAPLib\RDAPClient;

$rdap = new \Juanparati\RDAPLib\RDAPClient([
    #'ip'        => 'https://rdap.apnic.net/ip/',
    #'ip' => 'http://twnicrms.test:8000/ip/',
    #'ip' => 'https://rms.twnic.tw/ip/',
    #'tld'       => 'https://root.rdap.org/domain/',
    #'autnum'    => 'https://rdap.apnic.net/autnum/',
    #'autnum'    => 'http://twnicrms.test:8000/autnum/',
    'autnum' => 'https://rms.twnic.tw/autnum/',
    #'domain'    => 'https://rdap.apnic.net/domain/',
#'entity'    => 'https://rdap.apnic.net/registry/entity/',
#'registrar' => 'https://rdap.apnic.net/entity/',
]);

try {
# apnic support
#$ip        = $rdap->ipLookup('94.234.38.5');    
$as        = $rdap->asLookup(1);
# apnic doesn't support
#$tld       = $rdap->tldLookup('io');
##$domain    = $rdap->domainLookup('google.com');
##$entity    = $rdap->entityLookup('APL7-ARIN');
##$registrar = $rdap->registrarLookup(1);

} catch(Exception $e) {
    print_r($e);
    exit;
}
#print_r($ip);
print_r($as);
#print_r($tld);
