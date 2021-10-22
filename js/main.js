var app = new Vue({
  el: '#app',
  data: {
    albums: null,
    genreList: [],
    genreSelected: ""
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/api')
      .then((response) => {
        this.albums = response.data;
        this.albums.forEach(album => {
          if (!this.genreList.includes(album.genre)) {
            this.genreList.push(album.genre);
          }
        });
      })
      .catch(function (error) {
        console.log(error);
      });

  },
  methods: {
    filterGenre() {
      axios.get('http://localhost/php-ajax-dischi/api', {
        params: {
          genre: this.genreSelected
        }
      })
        .then((response) => {
          this.albums = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    }
  }
})