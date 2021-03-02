let app = new Vue({
    el: '#app',
    data: {
        arrayDischi:[]
    },
    mounted(){
        anxios
        .get('server.php')
        .then (response => {
            this.dischi= response.data;
        });
    }
});