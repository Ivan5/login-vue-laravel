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
                    swal({
                        title: "Has iniciado sesión",
                        text: "Datos correctos",
                        icon: "success",
                        closeOnClickOutside: false,
                        closeOnEsc: false
                    }).then(select => {
                        if (select) {
                            location.reload();
                        }
                    });
                })
                .catch(err => {
                    let er = err.response.data.errors;
                    let mensaje = "Error no identificado";
                    if (er.hasOwnProperty("usuario")) {
                        mensaje = er.usuario[0];
                    } else if (er.hasOwnProperty("password")) {
                        mensaje = er.password[0];
                    } else if (er.hasOwnProperty("login")) {
                        mensaje = er.login[0];
                    }

                    swal("Error", mensaje, "error");
                });
        }
    }
});
