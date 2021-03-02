// Seconda Milestone:
// Attraverso l’utilizzo di Vue ed axios, al caricamento della pagina stampare i dischi musicali.
// Bonus
// Filtrare i dati per genere musicale.
let app = new Vue({
  el: '#music',
  data:{
    dischi: [],
    generiMusica: ['All']
  },
  mounted(){
    axios
      .get('server.php')
      .then( response => {
        this.dischi = response.data;
         // console.log(this.dischi);
        this.genereCanzone();
      });
  },
  methods:{
    genereCanzone(){
      this.dischi.forEach((item) => {
        if (!this.generiMusica.includes(item.genre)) {
          this.generiMusica.push(item.genre);
        }
        console.log(this.generiMusica);
      });
    }

  }
});
