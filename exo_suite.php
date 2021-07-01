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

<a class="nav-link" href='index.php'>page index</a>



<div id="magic">
    <input type="number" v-model.number="x">
<!--    <div class="jumb" v-show="trop"> {{// vari}}</div>-->
<!--    <button v-on:click="btn1_click">trouve</button>-->
    <button @click="gene">test</button>
    <p>{{testeuh}}</p>
</div>



<script>
    const add = new Vue({
        el: '#magic',
        data: {
            x: 0,
            y:0,
            trop: true,
            testeuh:0,
            // gooder: false,
            // good:"",
            vari: 'choisir un chiffre'
        },

            // created :{
            // randomNumber : function(){
            //     getRandomIntInclusive(min, max) {
            //         min = Math.ceil(min);
            //         max = Math.floor(max);
            //         return Math.floor(Math.random() * (max - min +1)) + min;
            //     }
            // }}
        methods: {
        //     btn1_click: function (evt) {
        //         if (this.x > this.y) {
        //             add.vari = 'Trop grand';
        //             this.trop = true;
        //
        //         } else if{
        //             add.vari = 'Trop petit';
        //             this.trop = true;
        //         }else if {
        //             add.vari ="c'est le bon chiffre";
        //             this.trop = true;
        //         }
        //
        //     }
            gene:function(event){
                add.testeuh=parseInt(100*Math.random());
            }
        }
    });
    // let x = parseInt(100*Math.random());
    // console.log(x);
</script>



