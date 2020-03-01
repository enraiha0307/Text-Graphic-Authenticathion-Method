<?php
$string="FkOxOJQTzED1G/pf/D/kl+KwZtk5QEhMrXMB5x1QhjDF1kTrEOJOlC4cRQIkMr0llpJe3naZv0E8
    AiKq1mexuKQxweWtkGplAyFfKj+AgihrxaRVX+xlybO68envMxehflpXoqN8IhM0PtGqTfJ5TPAP
    81xqKkPl5LH5dsOOXdgr+Vy6S0UZTl22TgmYLTxyw3B/X2oYwj6FIKh+KwQ6igvPMrqZsEo1oa00
    4LOc63KiGs24aLkmIonNo1o9EnrKRe8g7WQwtDxljgNQ18bMrkofGLnPnqv+UMEKC5rb/A2vzv+a
    TkfHr/D/ByzUvEJbCeMUK/ysABjqSLcB9iI6rg==";
$encryptedString = base64_decode($string);
	$key="-----BEGIN PUBLIC KEY-----
MIIBIDANBgkqhkiG9w0BAQEFAAOCAQ0AMIIBCAKCAQEApeRuOhn71+wcRtlN6JoW
JLrVE5HKLPukFgpMdguNskBwDOPrrdYKP1e3rZMHN9oVB/QTTpkQM4CrGYlstUmT
u5nEfdsH4lHRxe3qhi9+zOknWKJCnW4Cq70oITCAK08BIJ/4ZcGM1SUyv1+0u1aB
cx6g1aKhthttRjNpck2LBaHVolt7Z4FTb5SdZMwJKRyEv8fuP6yyR0CJGEbQKZKA
ODNKyqJ42sVzUQ2AMQIWdhkFdAFahKCL4MChGvKU6F20cHdvokyxXJjU3sZobjNf
i+8FzH9hd7y8kmi4o3AKP69p5asgflXoXHpo135i3NzZqlNJ+Bs9pY+90u9iLScp
JwIBAw==
-----END PUBLIC KEY-----
";
openssl_public_decrypt($encryptedString, $decrypted, $key);
$string1=$decrypted;
echo $string1;


?>