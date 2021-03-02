var app = new Vue({
    el: '#app',
    data: {
        dischi:[]
    },
    mounted(){
        alert('ciao');
        axios
        .get('server.php')
        .then (response => {
            this.dischi= response.data;
        });
        
    }
});