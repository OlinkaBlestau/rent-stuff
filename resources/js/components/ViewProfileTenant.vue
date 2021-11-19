<template>
    <div class="LandlodrProfile text-center">
        <div class="infobox">
            <h2>Перегляд профілю</h2>
            <div class="data">
                <p class="dataTitle">Ім'я</p>
                <p class="dataInfo"> с мт </p>
            </div>
            <div class="data">
                <p class="dataTitle">Прізвище</p>
                <p class="dataInfo">пваи</p>
            </div>
            <div class="data">
                <p class="dataTitle">Номер мобільного телефону</p>
                <p class="dataInfo">тптпа</p>
            </div>
            <div class="data">
                <p class="dataTitle">E-mail</p>
                <p class="dataInfo">птапт</p>
            </div>
            <div class="data">
                <p class="dataTitle">Пароль</p>
                <p class="dataInfo">птапт</p>
            </div>
            <div class="text-center">
                <a id="submitButton" href="/EditProfileLandlord" type="submit" class="btn">Редагувати профіль</a>
            </div>
        </div >
    </div>
</template>

<script>
export default {
    name: "ViewProfileTenant"
}
</script>

<style scoped>
h2{
    margin-bottom: 40px;
}
.dataTitle{
    font-family: 'Poiret One', cursive;
    font-size: 25px;
    margin-bottom: 25px;
}
.infobox{
    margin: 50px auto;
    max-width: 650px;
    padding: 40px 20px;
    background:#E3DBDA;
    border-radius: 15px;
    position: relative;
    text-shadow: none;
}
#submitButton{
    margin-top: 20px;
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
    font-size: 20px;
}
</style>
