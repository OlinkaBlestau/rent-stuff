<template>
    <div class="Support">
        <div class="infobox">
            <h2>Надішліть повідомлення</h2>
            <p>У разі винекнення проблеми чи запитань надішліть нам повідомлення, відповідь буде надіслана вам на пошту</p>
            <div class="profile__info">
                <h3>Ім'я</h3>
                <input class="input__name" type="text" maxlength="30">
            </div>
            <div class="profile__info">
                <h3>Прізвище</h3>
                <input class="input__name" type="text" maxlength="30">
            </div>
            <div class="profile__info">
                <h3>E-mail</h3>
                <input class="input__name" type="text" maxlength="30">
            </div>
            <div class="profile__info">
                <h3>Повідомлення</h3>
                <textarea class="massage"></textarea>
            </div>
            <div class="text-center">
                <a id="submitButton" href="/Support" type="submit" class="btn">Надіслати</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Support"
}
</script>

<style scoped>
p{
    text-align: center;
    margin-top: 15px;
}
h2{
    text-align: center;
    font-family: 'Palanquin Dark', sans-serif;
}
.input__name{

    font-family: 'Palanquin Dark', sans-serif;
    font-size: 20px;
    width: 50%;
}
.massage{
    width : 560px;
    height : 160px;
    font-size: 20px;
}
.profile__info{
     margin-top: 28px;
}
h3{
    font-family: 'Poiret One', cursive;
    font-size: 25px;
}
.infobox{
    margin: 40px auto;
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
</style>
