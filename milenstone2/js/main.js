new Vue({
    el: "#app",
    data: {
        
        listaDischi: []
    },
    mounted() {
        axios.get("api/dischi.php")
        .then(resp => {
            this.listaDischi = resp.data
        })
    }
})