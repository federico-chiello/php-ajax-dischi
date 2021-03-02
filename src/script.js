// Seconda Milestone:
// Attraverso l’utilizzo di Vue ed axios, al caricamento della pagina stampare i dischi musicali.
// Bonus
// Filtrare i dati per genere musicale.
let app = new Vue({
  el: '#music',
  data:{
    dischi: []
  },
  mounted(){
    axios
      .get('server.php')
      .then( response => {
        this.dischi = response.data;
         console.log(this.dischi);
      });
  }
});
