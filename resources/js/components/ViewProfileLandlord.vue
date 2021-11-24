<template>
    <div class="LandlodrProfile text-center">
        <div class="infobox">
            <h2>Перегляд профілю</h2>
            <div class="data">
                <p class="dataTitle">Ім'я</p>
                <p class="dataInfo">{{ this.userData.Name }}</p>
            </div>
            <div class="data">
                <p class="dataTitle">Прізвище</p>
                <p class="dataInfo">{{ this.userData.Surname }}</p>
            </div>
            <div class="data">
                <p class="dataTitle">Номер мобільного телефону</p>
                <p class="dataInfo">{{ this.userData.Phone }}</p>
            </div>
            <div class="data">
                <p class="dataTitle">E-mail</p>
                <p class="dataInfo">{{ this.userData.Email }}</p>
            </div>
            <div class="data">
                <p class="dataTitle">Адреса</p>
                <p class="dataInfo">{{ this.userData.Address }}</p>
            </div>
            <div class="data">
                <p class="dataTitle">Пароль</p>
                <p class="dataInfo">{{ this.userData.Password }}</p>
            </div>
            <div class="text-center">
                <a id="submitButton" href="/EditProfileLandlord" type="submit" class="btn">Редагувати профіль</a>
            </div>
        </div >
    </div>
</template>

<script>
export default {
    name: "ViewProfileLandlord",
    props: {
        user: {}
    },
    data() {
        return {
            userData: JSON.parse(this.user),
        }
    }
}
</script>

<style scoped>
h2{
    margin-bottom: 30px;
}
.dataTitle{
    font-family: 'Poiret One', cursive;
    font-size: 25px;
    margin-bottom: 18px;
}
.infobox{
    margin: 25px auto;
    width: 650px;
    height: 820px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 15px;
    position: relative;
    text-shadow: none;
}
#submitButton{
    margin-top: 10px;
    position:relative;
    width: 40%;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 21px;
    border-radius:3px;
    background-color: #C7B9B7;
    outline: none;
}
.dataInfo{
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 25px;
}

</style>
