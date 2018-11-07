<?php
/**
 * Created by PhpStorm.
 * User: Darkdady
 * Date: 11/07/18
 * Time: 11:39
 */
?>
<html>
    <h1>On a une nouvelle demande de Devis !</h1>
    <br>
    <p>Name: {{ $contact['name'] }}</p>
    <p>E-mail: {{ $contact['email'] }}</p>
    <p>Telephone: {{ $contact['telephone'] }}</p>
    <br>
    <p>Sujet:</p>
    <p>{{ $contact['message'] }}</p>
</html>
