var app = new Vue({
  el: '#app',
  data: {
    albums: null,
    genreSelected: ""
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/api')
      .then((response) => {
        this.albums = response.data;
      })
      .catch(function (error) {
        console.log(error);
      })
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
        })
    }
  }
})