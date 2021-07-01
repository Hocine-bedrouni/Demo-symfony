<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma premiere Vue app</title>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<p>Hello</p>
<div class="nav-item">
<a class="nav-link" href='index.php'>page index</a>
</div>

<div id="tuto">
    <p v-text="montant | euros"></p>
</div>

<script>
new Vue({
el: '#tuto',
data: {
montant: '23.50'
},
filters: {
euros: function(valeur) {
return valeur + ' €';
}
}
});
</script>