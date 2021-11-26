<template>
    <div class="page">
        <div class="SignPage">
            <div class="d-flex col-12 form-signin container justify-content-center ">
                <form action="/signUpService" method="post">
                    <input type="hidden" name="_token" :value="this.csrfToken">
                    <h1 class="h3  fw-normal text-center">{{ $t("formEnter.enter") }}</h1>
                    <div class="form-group mt-4">
                        <label for="email">{{ $t("formEnter.email") }}</label>
                        <input v-model="email" type="email" :class="'form-control ' + formErrors.email" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group mt-4">
                        <label for="password">{{ $t("formEnter.password") }}</label>
                        <input v-model="password" type="password" :class="'form-control ' + formErrors.password" id="password" name="password" placeholder="Пароль">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn" type="submit" :disabled="active">{{ $t("formEnter.btnEnter") }}</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="/signIn" >{{ $t("formEnter.href") }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SignUp",
    data: () => ({
        email: "",
        password: "",
        formErrors: {
            email: 'is-invalid',
            password: 'is-invalid'
        },
        active: 'true'
    }),
    updated() {
        let errors = Object.values(this.formErrors);
        this.active = errors.includes("is-invalid")
    },
    computed: {
        csrfToken: function () {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
    },
    watch: {
        email() {
            this.formErrors.email = "is-valid";
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email))) {
                this.formErrors.email = "is-invalid";
            }
        },
        password() {
            this.formErrors.password = "is-valid";
            if ((this.password.length < 5) || !(/[a-zA-Z0-9]/.test(this.password))) {
                this.formErrors.password = "is-invalid";
            }
        },
    },
}
</script>

<style scoped>
h1{
    margin-top:20px;
    margin-bottom: 40px;
    color:#000;
    font-size: 38px;
    font-family: 'Palanquin Dark', sans-serif;
    font-weight: 500;
}
.SignPage{
    margin: 60px auto;
    max-width: 650px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 15px;
    position: relative;
    text-shadow: none;
    box-shadow: 0 3px 5px 0 rgba(0,0,0,0.31);
}
.form-group{
    display: flex;
    justify-content: space-between;
}
.form-group label{
    color:#2C3531;
    top:5px;
    position: relative;
    right: 10px;
    font-family: 'Poiret One', cursive;
    font-size: 24px;

}
.form-group button{
    margin-top: 45px;
    position:relative;
    margin-left:159px;
    width: 40%;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 24px;
    border-radius:3px;
    background-color: #C7B9B7;
}
.form-group a{

    margin-top: 20px;
    font-size: 20px;
    position:relative;
    margin-left:184px;
    font-family: 'Poiret One', cursive;
    color:#000;

}
input {

    border: none;
    background-color: rgba(255,255,255,0);
    border-bottom: solid black;
    size: 3px;
    margin-left: 10px;
    width: 300px;
    font-family: 'Montserrat Alternates', sans-serif;
    font-size: 16px;
    font-weight: 300;
}
</style>
