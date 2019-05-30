import Axios from "axios";

//Codigo personalizado JS
new Vue({
    el: "#app-login",
    data: {
        usuario: "",
        password: ""
    },
    methods: {
        iniciarSesion() {
            axios
                .post("/iniciar-sesion", {
                    usuario: this.usuario,
                    password: this.password
                })
                .then(response => {
                    console.log(response);
                })
                .catch(err => {
                    console.log(err.response.data);
                });
        }
    }
});
