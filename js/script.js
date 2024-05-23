const { createApp } = Vue;

createApp ({
    data() {
        return {
            cd : []
        }
    },
    created() {
        axios
      .get("http://localhost:8888/boolean/php-dischi-json/server.php")
      .then((resp) => {
       this.cd = resp.data.result;
       console.log(this.cd);
      });
    },
}). mount("#app");