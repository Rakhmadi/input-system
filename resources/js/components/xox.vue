<template>
    <div>
        <div v-for="bad in bid" v-bind:key="bad.id" >

            <h3>{{ bad.id }}</h3>
            <h3>{{ bad.csname}}</h3>
            <h3>{{ bad.bl_number }}</h3>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                bid: []
            }
        },
        mounted() {
            var app = this;
            window.axios.get('/api/data')
                .then(function (resp) {
                      app.bid = resp.data.data;
                }).bind(this)
                .catch(function (resp) {
                    console.log(resp);
                    alert("tidak bisa connect ke api");
                });
        }
        }
</script>