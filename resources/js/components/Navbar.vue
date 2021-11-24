<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RentStuff</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav col-12 mb-2 text-center justify-content-center mb-md-0">

                            <li v-if="role === '0'"><a type="button" href="/Tenant" class="nav-link link-dark px-2">Головна</a></li>
                            <li v-else-if="role === '1'"><a type="button" href="/landLord" class="nav-link link-dark px-2">Головна</a></li>
                            <li v-else><a type="button" href="/" class="nav-link link-dark px-2">Головна</a></li>

                            <li v-if="role === '0'"><a type="button" href="#rent" class="nav-link link-dark px-2">Можливості</a></li>
                            <li v-else-if="role === '1'"><a type="button" href="#rent" class="nav-link link-dark px-2">Можливості</a></li>
                            <li v-else><a type="button" href="#rent" class="nav-link link-dark px-2">Можливості</a></li>

                            <li v-if="role === '0'"><a type="button" href="#help" class="nav-link link-dark px-2">Допомога</a></li>
                            <li v-else-if="role === '1'"><a type="button" href="#help" class="nav-link link-dark px-2">Допомога</a></li>
                            <li v-else><a type="button" href="#help" class="nav-link link-dark px-2">Допомога</a></li>

                            <li v-if="role === '0'"><a type="button" href="#contacts" class="nav-link link-dark px-2">Контакти</a></li>
                            <li v-else-if="role === '1'"><a type="button" href="#contacts" class="nav-link link-dark px-2">Контакти</a></li>
                            <li v-else><a type="button" href="#contacts" class="nav-link link-dark px-2">Контакти</a></li>

                            <li v-if="role === ''"><a type="button" href="/signUp" class="nav-link link-dark px-2">Увійти</a></li>
                            <li v-else-if="role === '1'"><a class="nav-link link-dark px-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLinkAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Профіль</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/ViewProfileLandlord">Мій профіль</a>
                                    <a class="dropdown-item" href="/ViewAd">Мої оголошення</a>
                                    <a class="dropdown-item" href="/CreateAd">Створити оголошення</a>
                                    <!--<a class="dropdown-item" href="#">Повідомлення</a>-->
                                    <a class="dropdown-item" href="/Support">Служба підтримки</a>
                                </div>
                            </li>
                            <li v-else><a class="nav-link link-dark px-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLinkUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Профіль</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/ViewProfileLandlord">Мій профіль</a>
                                    <a class="dropdown-item" href="/Support">Служба підтримки</a>
                                </div>
                            </li>
                            <li v-if="role !== ''"><a type="button" href="/logOut" class="nav-link link-dark px-2">Вийти</a></li>
                            <li><a class="nav-link link-dark px-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLinkLan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ua</a>
                                <div class="dropdown-menu" id = "lang" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item"  href="#">En</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Navbar",
    props: {
        user: "",
        role: "",
    }
}
</script>
<style>
header{

    background-color: #C7B9B7;
    font-size: 22px;
    font-weight: 400;
    font-family: 'Palanquin Dark', sans-serif;
}
html ,body{
@import url('https://fonts.googleapis.com/css2?family=Palanquin+Dark:wght@400;500;700&display=swap');

    font-family: 'Palanquin Dark', sans-serif;
    background-color: #ffffff;
    height: 100vh;
    margin: 0;
    background-attachment: fixed;

}

</style>
<style scoped>

.navbar-brand{
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 40px;
    font-weight: 700;
    margin-left:20px;
}
ul li a:hover{
    color:#000000;
    text-decoration: underline;
}
.dropdown-item{
    text-align: center;
}
#lang{
    min-width: 20px;
}

.d-flex a{
    font-family: 'Poiret One', cursive;
    font-size: 28px;
    font-weight: 400;
    margin-right:50px;
}

</style>
