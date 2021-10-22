var app = new Vue({
  el: '#app',
  data: {
    albums: null
  },
  created() {
    axios.get('http://localhost/php-ajax-dischi/api')
      .then((response) => {
        this.albums = response.data;
      })
      .catch(function (error) {
        console.log(error);
      })
  }
})