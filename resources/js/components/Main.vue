<template>
    <div class="mainDiv">
        <div class="intro">
            <div class="img__container">
                <h1 class="img__title">RentStuff</h1>
                <h3 class="img__description">{{ $t('mainPages.rentalService') }}</h3>
                <form action="/signUp">
                    <button type="submit"> <span class="text__btn">{{ $t('mainPages.createAd') }}</span></button>
                </form>
            </div>
        </div>
        <section class="section__about">
            <div class="section__container">
                <div class="section__header">
                    <h3 class="section__title"> <a name="rent" >{{ $t('mainPages.possibleToRent') }}</a> </h3>
                </div>
            </div>
            <div class="about">
                <div class="about__first">
                    <div class="about__item">
                        <div class="about__img">
                            <img src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/257617515_3061423760852178_5214139688266362271_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_ohc=_bLE44L1ZjwAX80GRXF&_nc_oc=AQk7GYsmlH9U6hwhdKkXTTL-an2ThqTh2G3XrtU7vFD1QJ7Fo19EkklNobMmUEepzxo&_nc_ht=scontent.fhrk2-1.fna&oh=d610c0fae62734c50853761debc6b0ee&oe=61A5850A" alt="">
                            <h5 class="about__description">{{ $t('mainPages.sport') }}</h5>
                        </div>
                    </div>
                    <div class="about__item">
                        <div class="about__img">
                            <img src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/258233195_3061424107518810_4345716241999433935_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovBICvzgMY0AX_Q0OPu&_nc_ht=scontent.fhrk2-1.fna&oh=1dcb586c08f4260944aab9896baa9266&oe=61A4BE78" alt="">
                            <h5 class="about__description">{{ $t('mainPages.children') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="about__first">
                    <div class="about__item">
                        <div class="about__img">
                            <img src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/258170798_3061424124185475_8974984382869903643_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_ohc=tNe_8z_rP4AAX_6IiZM&_nc_ht=scontent.fhrk2-1.fna&oh=63a1121f366bf0660076d47efde69f15&oe=61A4D263" alt="">
                            <h5 class="about__description">{{ $t('mainPages.clothes') }}</h5>
                        </div>
                    </div>
                    <div class="about__item">
                        <div class="about__img">
                            <img src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/257392082_3061424120852142_8626919439283653651_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=gIl8zKRpX9wAX_W6vV5&_nc_ht=scontent.fhrk2-1.fna&oh=1c8c65f58c513ccc157598243a28fd77&oe=61A55BEE" alt="">
                            <h5 class="about__description">{{ $t('mainPages.electrical') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__help">
            <div class="section__help__user">
                <div class="section__help__header">
                    <h3 class="section__title"> <a name="help" >{{ $t('mainPages.help') }}</a> </h3>
                </div>
                <div class="section__help__text">
                    <p>{{ $t('mainPages.text.modernPlatform') }}</p>
                    <p>{{ $t('mainPages.text.instruction') }}</p>
                </div>
                <div class="mark__section__help">
                    <ul type="circle">
                        <li>{{ $t('mainPages.text.li1') }}</li>
                        <li>{{ $t('mainPages.text.li2') }}</li>
                        <li>{{ $t('mainPages.text.li3') }}</li>
                        <li>{{ $t('mainPages.text.li4') }}</li>
                        <li>{{ $t('mainPages.text.li5') }}<a href="/Support" class="chat">{{ $t('mainPages.text.a') }}</a>.</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section__contacts">
            <div class="contacts">
                <div class="contacts__title">
                    <h3 class="section__title"> <a name="contacts">{{ $t('mainPages.contact') }}</a> </h3>
                </div>
                <div class="social__net">
                    <h5 class="main_social_net">{{ $t('mainPages.socialNet') }}</h5>
                    <h5 class="advertising__title">{{ $t('mainPages.ourEmail') }}</h5>
                </div>
                <div class="list__net">
                    <a href="https://uk-ua.facebook.com/" class="social__networks">Facebook</a>
                    <a href="https://www.instagram.com/?hl=ru" class="social__networks">Instagram</a>
                    <a href="https://web.telegram.org/z/" class="social__networks">Telegram</a>
                    <h5 class="email">rentstuff@gmail.com</h5>
                </div>

            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "Main",

}
</script>


<style scoped>

.chat{
    color: #000000;
}

.mainDiv{
    background-color: #C7B9B7;
}

.intro{
    width: 100%;
    height: 100vh;
    background: url("https://www.androidponsel.com/wp-content/uploads/2021/06/20210616_102513_0002.png") center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}

button{
    position: absolute;
    width: 252px;
    left: 1265px;
    top: 580px;
    font-size: 22px;
    display: flex;
    border-radius:10px;
    background-color: #C7B9B7;
    outline: none;
}
.img__container {
    position: relative;
}
.img__title {

    position: absolute;
    width: 525px;
    left: 1100px;
    top: 300px;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 120px;
    display: flex;

}

.img__description{

    position: absolute;
    width: 500px;
    left: 1160px;
    top: 460px;
    font-family: 'Poiret One', cursive;
    font-size: 72px;
    display: flex;
}


.section__about{
    padding: 65px 0;
}

.section__header{
    width: 100%;
    max-width: 950px;
    margin: 0 auto 40px;
    text-align:  center;
}

.section__title{
    font-size: 50px;
    font-family: 'Poiret One', cursive;
    color: #000000;
}

.about{
    display: flex;
    flex-wrap: wrap;
}
.about__item{
    width: 30%;
    margin: 20px auto 20px 220px;
}
.about__first{
    display: flex;
    justify-content: space-between;
}
.about__description{
    padding: 14px;
    font-size: 22px;
    margin: 0 auto 0 180px;

}

.section__help__header{
    width: 100%;
    max-width: 950px;
    margin: auto auto 80px;
    text-align:  center;
}
.section__help{
    font-size: 50px;
    font-family: 'Poiret One', cursive;
    color: #000000;
}
p, ul{
    margin: 20px auto 20px 220px;
    font-family: 'Palanquin Dark', sans-serif;
    font-size: 28px;
}
li{
    line-height: 80px;
}
.section__contacts{
    padding: 40px 0;
}
.social__net{
    display: flex;
}
.contacts__title{
    width: 100%;
    max-width: 950px;
    margin: auto auto 80px;
    text-align:  center;
}
.main_social_net{
    font-size: 25px;
    margin: 0 auto 0 420px;
}
.advertising__title{
    font-size: 25px;
    margin: 0 auto 0 420px;
}
.list__net{
    display: flex;
    margin: 10px auto auto 220px;
}
.email{
    margin: 40px auto auto 500px;
    font-family: 'Poiret One', cursive;
    font-size: 30px;
}
.social__networks{
    color:#000;
    margin: 50px;
    font-size: 25px;
    font-family: 'Poiret One', cursive;
}


</style>
