<template>
    <div class="page">
        <div class="SignPage">
            <div class="d-flex col-12 form-signin container justify-content-center">
                <form action="/signInService" method="post">
                    <input type="hidden" name="_token" :value="this.csrfToken">
                    <h1 class="title mb-3 fw-normal text-center">{{ $t("formRegistration.signIn") }}</h1>
                    <div class="form-group mt-4">
                        <label for="name">{{ $t("formRegistration.name") }}</label>
                        <input v-model="name" type="text" :class="'form-control ' + formErrors.name" id="name" name="name" placeholder="Введiть iм'я">
                    </div>
                    <div class="form-group mt-4">
                        <label for="surname">{{ $t("formRegistration.surname") }}</label>
                        <input v-model="surname" type="text" :class="'form-control ' + formErrors.surname" id="surname" name="surname" placeholder="Введiть прiзвище">
                    </div>
                    <div class="form-group mt-4">
                        <label for="email">{{ $t("formRegistration.email") }}</label>
                        <input v-model="email" type="email" :class="'form-control ' + formErrors.email" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group mt-4">
                        <label for="password">{{ $t("formRegistration.password") }}</label>
                        <input v-model="password" type="password" :class="'form-control ' + formErrors.password" id="password" name="password" placeholder="Введiть пароль">
                    </div>
                    <div class="form-group mt-4">
                        <label for="phone">{{ $t("formRegistration.phone") }}</label>
                        <input v-model="phone" type="phone" :class="'form-control ' + formErrors.phone" id="phone" name="phone" placeholder="Введiть номер телефону">
                    </div>
                    <div class="form-group mt-4">
                        <label for="address">{{ $t("formRegistration.address") }}</label>
                        <input v-model="address" type="text" :class="'form-control ' + formErrors.address" id="address" name="address" placeholder="Введiть адресу">
                    </div>
                    <div class="form-group mt-4">
                        <label>{{ $t("formRegistration.choseRole") }}</label>
                        <select name="role" id="role" class="form-select">
                            <option value="1" selected>{{ $t("formRegistration.landlord") }}</option>
                            <option value="0">{{ $t("formRegistration.tenant") }}</option>
                        </select>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn" type="submit" :disabled="active">{{ $t("formRegistration.btnEnter") }}</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="/signUp">{{ $t("formRegistration.href") }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "SignIn",
    data: () => ({
        name: "",
        surname: "",
        email: "",
        password: "",
        phone: "",
        address: "",
        role: "",
        formErrors: {
            name: "is-invalid",
            surname: "is-invalid",
            email: "is-invalid",
            password: "is-invalid",
            phone: "is-invalid",
            address: "is-invalid",
        },
        active: true
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
        name() {
            this.formErrors.name = "is-valid";
            if (!(/[А-ЩЬЮЯҐЄІЇа-щьюяґєії]/.test(this.name)) && (this.name.length < 4 || this.name.length > 32)){
                this.formErrors.name = "is-invalid";
            }
        },
        surname() {
            this.formErrors.surname = "is-valid";
            if (!(/[А-ЩЬЮЯҐЄІЇа-щьюяґєії]/.test(this.surname)) && (this.surname.length < 4 || this.surname.length > 32)){
                this.formErrors.surname = "is-invalid";
            }
        },
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

        phone() {
            this.formErrors.phone = "is-valid";
            if (!(/[+][0-9]{4,}/.test(this.phone))) {
                this.formErrors.phone = "is-invalid";
            }
        },

        address() {
            this.formErrors.address = "is-valid";
            if (!(/[А-ЩЬЮЯҐЄІЇа-щьюяґєії]/.test(this.address))){
                this.formErrors.address = "is-invalid";
            }
        },
    },
}
</script>

<style scoped>
h3{
    margin-top:20px;
    color:#000;
    font-size: 30px;
    font-family: 'Palanquin Dark', sans-serif;
    font-weight: 500;
    font-style: italic;
}
.title{

    margin-bottom: 40px;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 40px;
}

.SignPage{
    margin: 40px auto;
    max-width: 650px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 40px;
    position: relative;
    text-shadow: none;
    box-shadow: 0 3px 5px 0 rgba(0,0,0,0.31);
    margin-bottom: 90px;
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
    margin-left:180px;
    width: 40%;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 24px;
    border-radius:3px;
    background-color: #C7B9B7;
}
input{
    border: none;
    background-color: rgba(255,255,255,0);
    border-bottom: solid black;
    size: 3px;
    left: 20px;
    position: relative;
    width: 300px;
    font-family: 'Montserrat Alternates', sans-serif;
    font-size: 16px;
    font-weight: 300;
}
.form-select{
    position: relative;
    left: 20px;
    width:350px;
    height: 50px;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 20px;
    margin-bottom: 10px;
}
.form-group a{

    margin-top: 20px;
    font-size: 20px;
    position:relative;
    margin-left:221px;
    font-family: 'Poiret One', cursive;
    color:#000;

}
</style>
