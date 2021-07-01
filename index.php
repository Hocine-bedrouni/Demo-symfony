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


<div class="nav-item">
    <a class="nav-link" href='test.php'>page test</a>
    <a class="nav-link" href='liste.php'>page liste</a>
    <a class="nav-link" href='exo_suite.php'>page exo</a>

    <p v-show="affichage">{{message}}</p>

</div>

<script>
// new Vue({
// el: '#app',
// data () {
// return {
// info: null
// }
// },
// mounted () {
// axios
// .get('https://api.coindesk.com/v1/bpi/currentprice.json')
// .then(response => (this.info = response))
// }
// })
</script>
<!--<div id="app">-->
<!--    {{ info }}-->
<!--</div>-->


<style>
    #label1 {
        width: 300px;
        height: 100px;
        background-color: #327807;
    }
    #label2 {
        width: 300px;
        height: 100px;
        background-color: #ffffff;
    }
    #label3 {
        width: 300px;
        height: 100px;
        background-color: #ff0000;
    }

</style>
<!--<body>-->
<!--<div id="app">-->
<!--    <p v-show="affichage">{{message}}</p>-->
<!--    <button v-on:click="btn1_click">Test 2</button>-->
<!--    <hr>-->
<!--   <div class="d-flex flex-row">-->
<!--    <div id="label1" v-show="affichage"></div>-->
<!--    <div id="label2" v-show="affichage"></div>-->
<!--    <div id="label3" v-show="affichage"></div>-->
<!--   </div>-->
<!--</div>-->



<br>
<div id="addi">
    <input type="number" v-model.number="first" @keyup="plus"> +
    <input type="number" v-model.number="second" @keyup="plus"> = {{total}}
    <p >{{ first + second}}</p>

</div>





    <script>
        const add = new Vue({
            el: '#addi',
            data: {
                first:0,
                second:0,
                total:0
                // texte: 'Aditionner !',
                // addition: false
            },
            methods : {
                plus: function (event){
                    this.total = this.first+this.second
                }
            }
            })

    </script>

<!---->
<!--<div id="vue_mult">-->
<!--    <input type="number" v-model="num1"  min="78" max="98" /> +-->
<!--    <input type="number" v-model="num2"  min="78" max="98" /> +-->
<!--    <input type="number" v-model="num3"  min="78" max="98" /> =-->
<!--    {{ num1+num2+num3 }}-->
<!--</div>-->
<!--<script>-->
<!--    const app = new Vue({-->
<!--        el:'#vue_mult',-->
<!--        data: {-->
<!--            num1:0,-->
<!--            num2:0,-->
<!--            num3:0-->
<!--        } //end data property-->
<!--    }) //end Vue object-->
<!--</script>-->




    <!--<div v-form="truc dans liste">-->
<!--    {{ item.sta_nom}}-->
<!--</div>-->

<!--json_encode()-->
<script>

    // json_encode();
    //
    // axios.get("liste.php").then(function(reponse) {
    //     console.log(reponse.data);
    //     this.liste = reponse.data;
    //     this.message = "Liste chargée";
    // });


    var app = new Vue({
        el: '#app',
        data: {
            message: 'Bonjour !',
            affichage: false
        },
        methods: {
            btn1_click: function (evt) {
                if (this.affichage === true) {
                    this.message = "Le label est visible";
                    this.affichage = false;
                } else{
                    this.message = "Le label est visible";
                    this.affichage = true;
                }
            }
        }
    });

// Additionneur

</script>













