<template>
    <div class="infobox">
        <div class="thing__img">
            <img class="images" src="https://scontent.fhrk2-1.fna.fbcdn.net/v/t39.30808-6/258233195_3061424107518810_4345716241999433935_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_ohc=ovBICvzgMY0AX_Q0OPu&_nc_ht=scontent.fhrk2-1.fna&oh=1dcb586c08f4260944aab9896baa9266&oe=61A4BE78" alt="">
        </div>
        <div class="name">
            <h5 class="title">{{ $t("Announcement.name") }}</h5>
            <p>{{ name }}</p>
        </div>
        <div class="name">
            <h5 class="title">{{ $t("Announcement.price") }}</h5>
            <p>{{ price }}</p>
        </div>
        <div class="name">
            <h5 class="title">{{ $t("Announcement.category") }}</h5>
            <p>{{ category }}</p>
        </div>
        <div class="name">
            <h5 class="title">{{ $t("Announcement.description") }}</h5>
            <p>{{ description }}</p>
        </div>
        <div class="btn-new">
            <a id="deleteButton" :href=deleteThing type="submit" class="btn"><img class="icon" src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png" alt=""></a>
        </div>
        <div class="btn-new">
            <a id="editButton" :href=editThing type="submit" class="btn"> <img class="icon" src="https://cdn-icons-png.flaticon.com/128/1250/1250615.png" alt=""></a>
        </div>
        <div class="btn-new">
            <a id="newButton" href="/CreateAd" type="submit" class="btn"> <img class="icon" src="https://cdn-icons-png.flaticon.com/128/628/628586.png" alt=""></a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Ad",
    props: {
        id: '',
        name: '',
        price: '',
        category: '',
        description: '',
    },
    computed: {
        deleteThing: function () {
            return `/deleteThing/${this.id}`;
        },
        editThing: function () {
            return `editThing/${this.id}`
        }
    }
}
</script>

<style scoped>
    h1 {
        text-align: center;
        margin-top: 35px;
    }
    .icon{
        width: 40px;
        height: 40px;
    }
    p {

    }
    #editButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 40px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    #deleteButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 180px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    #newButton {
        position: absolute;
        width: 80px;
        height: 50px;
        left: 317px;
        top: 275px;
        font-family: 'Palanquin Dark', sans-serif;
        font-size: 21px;
        border-radius:3px;
        background-color: #C7B9B7;
        outline: none;
    }
    h3 {
        font-family: 'Poiret One', cursive;
        font-size: 25px;
    }

    .images {
        margin: 20px 20px;
        width: 360px;
        position: absolute;
    }
    title {
        position: absolute;

    }
    .name {
        margin: 0 410px -3px;
    }
    .infobox {
        margin: 15px auto;
        width: 1500px;
        height: 365px;
        padding: 40px 20px;
        background: #E3DBDA;
        border-radius: 15px;
        position: relative;
        text-shadow: none;
    }

</style>
